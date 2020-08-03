<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'name',
        'document',
        'address',
        'neighborhood',
        'city',
        'state',
        'country',
        'postal_code',
        'telephone',
        'cell_phone',
        'email',
        'sexy',
        'nationality',
        'date_of_birth',
        'marital_status',
        'fathers_name',
        'mothers_name',
        'spouse_name',
        'wedding_date',
        'education_level',
        'course',
        'profession',
        'baptism_date',
        'baptism_church',
        'coming_church',
        'religious_formation',
        'status'
    ];
}
