<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'slug', 'icon', 'short_description', 'description', 'image', 'sort_order', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
