<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'contact_id',
        'user_id',
        'contact_image',
        'father_name',
        'mother_name',
        'email',
        'job_title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'id'            => 'integer',
        'contact_id'    => 'integer',
        'user_id'       => 'integer',
        'contact_image' => 'string',
        'father_name'   => 'string',
        'mother_name'   => 'string',
        'email'         => 'string',
        'job_title'     => 'string',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
        'deleted_at'    => 'datetime'
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}