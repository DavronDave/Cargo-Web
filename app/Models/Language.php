<?php

namespace App\Models;

use App\Http\Traits\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Language extends Model
{
    use HasFactory, Sortable, FileUpload;

    protected $guarded = [];

    public function scopeName($query, $data = null)
    {
        if($data)
        {
            return $query->where('name', 'like', '%'.$data.'%');
        }

        return $query;
    }

    public function scopeUrl($query, $data = null)
    {
        if($data)
        {
            return $query->where('url', 'like', '%'.$data.'%');
        }

        return $query;
    }
    public function scopeDefault($query, $data = null)
    {
        if($data)
        {
            return $query->where('default', 'like', '%'.$data.'%');
        }

        return $query;
    }
    public function scopeStatus($query, $data = null)
    {
        if($data)
        {
            return $query->where('status', 'like', '%'.$data.'%');
        }

        return $query;
    }

    public function getStatus()
    {
        switch($this->status)
        {
            case 1:
                return "Активный";
            case 2:
                return "Не активный";
        }
    }
}
