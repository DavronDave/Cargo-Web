<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ProductCategory extends Model
{
    use HasFactory, Sortable;
    protected $table = 'product_categories';

    protected $guarded = [];
}
