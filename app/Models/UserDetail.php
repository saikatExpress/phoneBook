<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'profile_images',
        'father_name',
        'mother_name',
        'current_city',
        'home_town',
        'school',
        'user_id',
    ];

    protected $casts = [
        'id'             => 'integer',
        'profile_images' => 'string',
        'father_name'    => 'string',
        'mother_name'    => 'string',
        'current_city'   => 'string',
        'home_town'      => 'string',
        'school'         => 'string',
        'user_id'        => 'integer',
        'created_at'     => 'datetime:Y-m-d H:i:s',
        'updated_at'     => 'datetime:Y-m-d H:i:s',
        'deleted_at'     => 'datetime:Y-m-d H:i:s',
    ];
}