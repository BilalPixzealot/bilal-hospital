<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['patient_name', 'phone', 'email', 'department_id', 'doctor_id', 'preferred_date', 'preferred_time', 'message', 'status'];

    protected $casts = ['preferred_date' => 'date'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
