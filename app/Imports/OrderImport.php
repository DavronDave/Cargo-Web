<?php

namespace App\Imports;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class OrderImport implements ToCollection, WithCalculatedFormulas
{
    // public function sheets(): array
    // {
    //     return [
    //         0 => new OrderSheetImport()
    //     ];
    // }

    public function collection(Collection $rows)
    {
        // dd($rows->toArray());
        // Order umumiy ma'lumotlar

        // $regionName = explode(' ', trim($rows[10][3]))[0] ?? null;
        $regionName = isset($rows[10][3]) && trim($rows[10][3]) !== ''
        ? explode(' ', trim($rows[10][3]))[0]
        : null;


// Regionni topamiz
        $region = Region::where('name', 'ILIKE', "%$regionName%")->first();

        $order = Order::create([
            'number'     => $rows[0][2] ?? null,
            'sender_fullname'     => $rows[4][3] ?? null,
            // 'sender_address'  => $rows[5][3] ?? null,
            // 'sender_phone'    => $rows[4][1] ?? null,
            'receiver_fullname'   => $rows[9][3] ?? null,
            'receiver_passport' => $rows[12][3] ?? null,
            'receiver_date' => $this->transformDate($rows[13][3] 
                                ?? $this->transformDate($rows[13][5] 
                                ?? $this->transformDate($rows[14][3] 
                                ?? $this->transformDate($rows[13][4] 
                                ?? null)))),
            'receiver_phone'  => $rows[11][3] ?? null,
            'address_id' => $region ? $region->id : 30, // address_id ni regions jadvalidan olish
            'manzil' => $rows[10][3] ?? null,
            'project_id' => 1, // project_id ni hardkod qilib beramiz
            'weight' => $rows[19][5] ?? $rows[18][5] ?? null,
        ]);

        // Mahsulotlar 19-29 qatorda (0-indeks bo‘yicha 18-28)
        $startIndex = 18;
        foreach ($rows as $index => $row) {
            // Mahsulotlar qatori: ustun 1 bo‘sh bo‘lsa, tovar yo‘q
            if ($index < $startIndex) continue;
            if (empty($row[1])) break; // tovar nomi yo‘q – mahsulotlar tugadi deb hisoblaymiz

            $products = Product::all();
            $input = strtolower(trim($row[1]));
            
            $bestMatch = null;
            $highestSimilarity = 0;
            
            foreach ($products as $product) {
                similar_text($input, strtolower($product->name), $percent);
                if ($percent > $highestSimilarity) {
                    $highestSimilarity = $percent;
                    $bestMatch = $product;
                }
            }
            
            if ($highestSimilarity >= 70) { // %70 dan yuqori o‘xshashlik bo‘lsa
                $product = $bestMatch;
            } else {
                $product = null;
            }
            

            // if($row[1] == 'oyoq kiyim')
            // {
            //     dd($product, trim($row[1]));
            // }

            $order->items()->create([
                'product_name' => $row[1],
                'quantity'     => (int) ($row[3] ?? 1),
                'price_usd'    => (float) $row[4] ?? 3,
                'order_id' => $order->id,
                'product_id' => $product ? $product->id : 111111,
            ]);
        }

    }
    private function transformDate($value)
    {
        $value = trim($value); // ortiqcha bo'sh joylarni olib tashlash

        if (is_numeric($value)) {
            return Date::excelToDateTimeObject($value)->format('Y-m-d');
        }

        $formats = ['d m Y', 'Y-m-d', 'd.m.Y', 'd/m/Y', 'd-m-Y', 'Y/m/d', 'Y.m.d', 'Y m d'];
        foreach ($formats as $format) {
            $date = \DateTime::createFromFormat($format, $value);
            if ($date !== false) {
                return $date->format('Y-m-d');
            }
        }

        return null;
    }
}
