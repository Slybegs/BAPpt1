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
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('kodeMatakuliah', 8);
            $table->text('namaMatakuliah');
            $table->integer('sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};

//php artisan crud:generate MatakuliahSully --fields='kodeMatakuliah#string; namaMatakuliah#text; sks#integer' --view-path=matakuliah --controller-namespace=App\\Http\\Controllers\\Matakuliah --route-group=matakuliah --form-helper=html