<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Product::create([
                'name'        => $row['name'],
                'code'        => $row['code'],
                'position'    => $row['position'],
                'category_id' => $row['category_id'],
                // 'created_at'  => $row['created_at'],
                // 'updated_at'  => $row['updated_at'],
            ]);
        }
    }
}
