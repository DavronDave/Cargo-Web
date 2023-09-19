<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Incoterm extends Model
{
    use HasFactory, Sortable;
    protected $guarded=[];
}
