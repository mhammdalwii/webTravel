<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatsTable extends Migration
{
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->integer('price');
            $table->integer('max_people');
            $table->string('image');
            $table->string('departure')->nullable(); // Jika kolom boleh NULL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
