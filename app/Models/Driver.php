<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Driver extends Model
{
    use HasFactory, Sortable;

    protected $guarded=[];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function receiverPeople()
    {
        return $this->hasMany(ReceiverPerson::class);
    }

}
