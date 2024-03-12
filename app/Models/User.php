<?php

namespace App\Models;

use App\Http\Traits\FileUpload;
use App\Models\Admin\Role;
use App\Models\Admin\RolePermission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sortable, FileUpload;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function getCurrentPermissions()
    {
        $objects = [];
        $user = self::getCurrentUser();

        if ($user != null) {
            return RolePermission::leftJoin('permission', 'role_permission.permission_id', '=', 'permission.id')
                ->where('role_id', $user->role_id)
                ->select(['permission.key as key', 'role_permission.value as value'])
                ->pluck('value', 'key')->all();
        } else {
            // Handle the case where the user is null (e.g., not logged in)
            return [];
        }
    }

    public static function getCurrentUser()
    {
        return auth()->user();
    }
    public function hasRole($role)
    {
        return $this->role()->where('key', $role)->exists();
    }


    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
