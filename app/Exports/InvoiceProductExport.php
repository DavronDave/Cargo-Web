<?php

namespace App\Exports;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;


class InvoiceProductExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $projectId;

    public function __construct($projectId)
    {
        $this->projectId = $projectId;
    }

    public function collection()
    {
        $invoices = Invoice::where('project_id', $this->projectId)->with('invoiceProducts')->orderBy('number', 'asc')->get();

        $data = [];

        foreach ($invoices as $invoice) {
            $hasProducts = $invoice->invoiceProducts->isNotEmpty(); // Check if there are associated products

            if ($hasProducts) {
                foreach ($invoice->invoiceProducts as $product) {
                    $data[] = [
                        $invoice->number,
                        '0', // Replace with your desired value
                        $invoice->sender_fullname,
                        '',
                        $invoice->receiver_passport,
//                        $invoice->receiver_date->format('d.m.Y'), // Format the date as needed
                        Carbon::parse($invoice->receiver_date)->format('d.m.Y'),
                        $invoice->weight,
                        $invoice->receiver_phone,
                        '', // Replace with your desired value
                        '', // Replace with your desired value
                        $product->product->code,
                        $product->product->position,
                        '796', // Replace with your desired value for Davlat_code
                        $product->quantity,
                        $product->price,
                        '840',
                        $product->product->name,
                    ];
                }
            } else {
                // Add a row for the invoice without product data
                $data[] = [
                    $invoice->number,
                    '0', // Replace with your desired value
                    $invoice->sender_fullname,
                    '',
                    $invoice->receiver_passport,
                    Carbon::parse($invoice->receiver_date)->format('d.m.Y'),
                    $invoice->weight,
                    $invoice->receiver_phone,
                    '', // Replace with your desired value
                    '', // Replace with your desired value
                    '', // Product's code
                    '', // Product's position
                    '', // Davlat_code
                    '', // Quantity
                    '', // Price
                    '840',
                    '', // Product_name
                ];
            }
        }

        return collect($data);
    }

    public function styles(Worksheet $sheet)
    {
        $conditional1 = new \PhpOffice\PhpSpreadsheet\Style\Conditional();
        $conditional1->setConditionType(\PhpOffice\PhpSpreadsheet\Style\Conditional::CONDITION_CELLIS);
        $conditional1->setOperatorType(\PhpOffice\PhpSpreadsheet\Style\Conditional::OPERATOR_GREATERTHAN);
        $conditional1->addCondition('30');
        $conditional1->getStyle()->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
        $conditional1->getStyle()->getFont()->setBold(true);
        $conditionalStyles[] = $conditional1;
        $sheet->getStyle('G')->setConditionalStyles($conditionalStyles);
    }

    public function headings(): array
    {
        return [
            "Invoice's number",
            'Internet',
            'Sender fullname',
            'Sender phone',
            'Receiver passport',
            'Receiver date',
            'Weight',
            'Receiver phone',
            'Rasxod',
            'Email',
            "Product's code",
            "Product's position",
            'Davlat_code',
            'Quantity',
            'Price',
            'Currency',
            'Product_name',
        ];
    }
}
