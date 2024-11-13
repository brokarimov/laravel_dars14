<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    protected $fillable = [
        'user_id',
        'code',
    ];
}
