<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ReceiverPerson extends Model
{
    use HasFactory, Sortable;

    protected $guarded=[];


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function address()
    {
        return $this->belongsTo(Region::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'receiver_passport', 'passport');
    }
}
