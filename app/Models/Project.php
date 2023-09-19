<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Project extends Model
{
    use HasFactory, Sortable;

    protected $guarded = [];

    public function sender()
    {
        return $this->belongsTo(Company::class, 'sender_id');
    }
    public function receiver()
    {
        return $this->belongsTo(Company::class, 'receiver_id');
    }

    public function contract()
    {
        return $this->belongsTo(CompanyContract::class);
    }

    public function incoterm()
    {
        return $this->belongsTo(Incoterm::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class)->orderBy('number', 'asc');
    }


}
