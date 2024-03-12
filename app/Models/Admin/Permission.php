<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public static $table_name = 'permission';
    use HasFactory;

    protected $table = 'permission';
    protected $guarded = [];
    public $timestamps = false;

    public static function check($permission_id, $user_id)
    {
        $user = User::find($user_id);
        if ($user != null) {
            if ($user->role_id == 1/*Admin*/) {
                return 1;
            }
            $rp = RolePermission::where('role_id', $user->role_id)->where('permission_id', $permission_id)->first();
            if ($rp != null) {
                return $rp->value ? 1 : 0;
            } else {
                return -1;
            }
        } else {
            return -1;
        }
    }

    public function valueByRole($role_id)
    {
        $value = $this->role_permissions->where('role_id', $role_id)->first();
        if ($value != null) {
            return $value->value;
        } else {
            return false;
        }
    }

    public function role_permissions()
    {
        return $this->hasMany(RolePermission::class);
    }
}
