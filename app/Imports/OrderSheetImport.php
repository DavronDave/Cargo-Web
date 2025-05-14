<?php

namespace App\Imports;

use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class OrderSheetImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        // Bu joyda order umumiy ma'lumotlarini olamiz
        $order = Order::create([
            'sender_name'        => $rows[3][5],
            'sender_address'     => $rows[4][5],
            'sender_phone'       => $rows[5][5],
            'receiver_name'      => $rows[9][5],
            'receiver_address'   => $rows[10][5],
            'receiver_phone'     => $rows[11][5],
            'receiver_passport'  => $rows[12][5],
            'receiver_birthdate' => Carbon::createFromFormat('d m Y', $rows[13][5])->format('Y-m-d'),
            'delivery_place'     => $rows[15][4],
        ]);

        // Endi order_items ro'yxatini qo'shamiz
        for ($i = 19; $i <= 29; $i++) {
            if (!empty($rows[$i][1])) {
                OrderItem::create([
                    'order_id'    => $order->id,
                    'product_name'=> $rows[$i][1],
                    'quantity'    => $rows[$i][2],
                    'price_usd'   => $rows[$i][3],
                    'weight_kg'   => $rows[$i][4],
                ]);
            }
        }
    }
}
