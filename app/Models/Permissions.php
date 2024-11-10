<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = [
        'name',
        'key',
        'permission_group_id'
    ];

    public function permission_groups()
    {
        return $this->belongsTo(PermissionGroup::class, 'permission_group_id');
    }
}
