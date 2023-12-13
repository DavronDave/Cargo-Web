<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ProductList extends Model
{
    use HasFactory, Sortable;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
