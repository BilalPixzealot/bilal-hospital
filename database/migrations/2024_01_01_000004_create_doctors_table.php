<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->string('photo')->nullable();
            $table->string('designation')->nullable();
            $table->string('qualifications')->nullable();
            $table->unsignedBigInteger('department_id')->nullable()->index();
            $table->foreign('department_id', 'doctors_dept_fk')->references('id')->on('departments')->onDelete('set null');
            $table->text('bio')->nullable();
            $table->string('opd_days')->nullable();
            $table->string('opd_timing')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
