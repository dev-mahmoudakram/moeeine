<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'service_type',
        'city',
        'expected_date',
        'notes',
        'locale',
        'status',
    ];

    protected $casts = [
        'expected_date' => 'date',
    ];
}
