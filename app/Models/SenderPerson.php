<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SenderPerson extends Model
{
    use HasFactory, Sortable;

    protected $table='sender_people';

    protected $guarded=[];
}
