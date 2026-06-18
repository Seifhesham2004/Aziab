<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedule_entries', function (Blueprint $table) {
            $table->id();
            $table->string('boat', 120);
            $table->string('region', 20);
            $table->string('route', 120)->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->index('region');
            $table->index('start_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule_entries');
    }
};
