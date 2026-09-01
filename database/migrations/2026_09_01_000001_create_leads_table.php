<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20)->default('contact'); // contact | booking
            $table->string('name', 191);
            $table->string('email', 191);
            $table->string('phone', 60)->nullable();
            $table->string('subject', 191)->nullable();
            $table->unsignedInteger('guests')->nullable();
            $table->date('preferred_date')->nullable();
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
            $table->index(['is_read', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
