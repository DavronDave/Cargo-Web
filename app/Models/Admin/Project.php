<?php

namespace App\Models\Admin;

use App\Http\Traits\FileUpload;
use App\Http\Traits\Translation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, FileUpload, Translation;

    protected $guarded = [];
}
