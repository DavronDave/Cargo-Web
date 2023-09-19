<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Region extends Model
{
    use HasFactory, Sortable;

    protected $guarded=[];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
