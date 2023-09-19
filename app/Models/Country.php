<?php

namespace App\Models;

use App\Http\Traits\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Country extends Model
{
    use HasFactory, Sortable, FileUpload;

    protected $guarded = [];
}
