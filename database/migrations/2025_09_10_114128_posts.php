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
        Schema::create('Posts', function (Blueprint $table) {
            $table->id(); //membuat kolom id (auto increment primary key)
            $table->string('title'); //membuat kolom title (Varchar)
            $table->text('body'); //membuat kolom body(TEXT)
            $table->timestamps(); //Membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Posts');
    }
};
