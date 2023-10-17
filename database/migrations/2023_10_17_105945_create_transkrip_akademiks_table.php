<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transkrip_akademiks', function (Blueprint $table) {
            $table->id();
            $table->char('studentID', 11);
            $table->char('kodeMatakuliah', 8);
            $table->char('kodeTerm', 8);
            $table->char('nilai', 2);
            $table->decimal('gpa', 2, 1);
            $table->integer('sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkrip_akademiks');
    }
};
