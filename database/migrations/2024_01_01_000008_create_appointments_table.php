<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'appt_dept_fk')->references('id')->on('departments')->onDelete('set null');
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->foreign('doctor_id', 'appt_doctor_fk')->references('id')->on('doctors')->onDelete('set null');
            $table->date('preferred_date');
            $table->string('preferred_time');
            $table->text('message')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending')->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
