<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['patient_name', 'review', 'rating', 'source', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];
}
