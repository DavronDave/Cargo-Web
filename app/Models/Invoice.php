<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function invoiceProducts()
    {
        return $this->hasMany(InvoiceProduct::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function address()
    {
        return $this->belongsTo(Region::class);
    }

    public function getTotalPriceAttribute()
    {
        return $this->invoiceProducts->sum('price');
    }

    public function receiver()
    {
        return $this->belongsTo(ReceiverPerson::class, 'receiver_passport', 'passport');
    }
}
