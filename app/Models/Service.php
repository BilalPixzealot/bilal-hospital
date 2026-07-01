<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'slug', 'icon', 'description', 'department_id', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
