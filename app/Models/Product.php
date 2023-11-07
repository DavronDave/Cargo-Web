<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class   Product extends Model
{
    use HasFactory, Sortable;

    protected $guarded = [];

    public function category()
    {
//        return $this->belongsTo(ProductCategory::class);
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function invoiceProducts()
    {
        return $this->hasMany(InvoiceProduct::class, 'product_id');
    }
}
