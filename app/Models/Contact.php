<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'address',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'id'           => 'integer',
        'first_name'   => 'string',
        'last_name'    => 'string',
        'phone_number' => 'string',
        'address'      => 'string',
        'created_at'   => 'datetime',
        'updated_at'   => 'datetime',
        'deleted_at'   => 'datetime'
    ];

    public function contactDetails()
    {
        return $this->hasMany(ContactDetails::class, 'contact_id', 'id');
    }
}