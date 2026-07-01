<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'slug', 'photo', 'designation', 'qualifications', 'department_id', 'bio', 'opd_days', 'opd_timing', 'sort_order', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
