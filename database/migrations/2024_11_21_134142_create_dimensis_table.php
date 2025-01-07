<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimensisTable extends Migration
{
    public function up()
    {
        Schema::create('dimensis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique()->default();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimensis');
    }
}
