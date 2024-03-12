<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RolePermission extends Model
{
    public static $table_name = 'role_permission';
    use HasFactory;
    public $timestamps = false;
    protected $table = 'role_permission';
    protected $guarded = [];

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
