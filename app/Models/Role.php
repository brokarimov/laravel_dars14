<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role',
        'is_active'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users', 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class,'role_permissions', 'role_id', 'permission_id');
    }
}
