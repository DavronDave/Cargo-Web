<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class District extends Model
{
    use HasFactory, Sortable;

    protected $guarded = [];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
