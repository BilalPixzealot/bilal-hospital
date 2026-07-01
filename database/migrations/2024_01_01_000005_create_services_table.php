<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('department_id')->nullable()->index();
            $table->foreign('department_id', 'services_dept_fk')->references('id')->on('departments')->onDelete('set null');
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
