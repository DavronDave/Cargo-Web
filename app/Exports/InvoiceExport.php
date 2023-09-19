<?php

namespace App\Exports;

use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InvoiceExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    protected $projectId;

    public function __construct($projectId)
    {
        $this->projectId = $projectId;
    }

    public function query()
    {
        return Invoice::where('project_id', $this->projectId);
    }

    public function map($invoice): array
    {
        $products = DB::table('invoice_products')
            ->join('products', 'invoice_products.product_id', '=', 'products.id')
            ->where('invoice_id', $invoice->id)
            ->get();

        $productData = [];

        foreach ($products as $product) {
            $productData[] = sprintf(
                '%s, %s, %s, %s, %s, %s',
                $product->code,
                $product->name,
                $product->position,
                $product->quantity,
                $product->price,
                '840' // Currency default
            );
        }

        return [
            $invoice->number,
            'Internet', // Replace with your desired value
            $invoice->sender_fullname,
            $invoice->sender_phone,
            $invoice->receiver_passport,
            $invoice->receiver_date,
            $invoice->weight,
            $invoice->receiver_phone,
            'Rasxod', // Replace with your desired value
            'Email', // Replace with your desired value
            implode("\n", $productData), // Convert product data to a string
        ];
    }


    public function headings(): array
    {
        return [
            'Invoice\'s number',
            'Internet',
            'Sender fullname',
            'Sender phone',
            'Receiver passport',
            'Receiver date',
            'Weight',
            'Receiver phone',
            'Rasxod',
            'Email',
            'Product Details', // This is a single cell containing product data
        ];
    }
}
