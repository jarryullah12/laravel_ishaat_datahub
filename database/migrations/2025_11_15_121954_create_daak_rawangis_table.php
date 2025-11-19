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
        Schema::create('daak_rawangis', function (Blueprint $table) {
            $table->id();
            $table->text('rawangi_no');
            $table->text('date');
            $table->text('name');
            $table->text('file');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daak_rawangis');
    }
};
