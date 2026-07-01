<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    protected $fillable = ['name', 'type', 'logo', 'is_active', 'sort_order'];

    protected $casts = ['is_active' => 'boolean'];
}
