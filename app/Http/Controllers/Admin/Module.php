<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    public static $table_name = 'module';
    use HasFactory;
    public $timestamps = false;
    protected $table = 'module';
    protected $guarded = [];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'module_id')->orderBy('id');
    }
}
