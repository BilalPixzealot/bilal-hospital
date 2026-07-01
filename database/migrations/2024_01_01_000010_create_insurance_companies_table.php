<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('insurance_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['insurance', 'tpa', 'government'])->default('insurance')->index();
            $table->string('logo')->nullable();
            $table->boolean('is_active')->default(true)->index();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('insurance_companies');
    }
};
