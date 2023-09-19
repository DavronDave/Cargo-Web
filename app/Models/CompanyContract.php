<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class CompanyContract extends Model
{
    use HasFactory, Sortable;

    public function sender()
    {
        return $this->belongsTo(Company::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(Company::class, 'receiver_id');
    }

}
