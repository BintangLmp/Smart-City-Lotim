<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimensiDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('dimensi_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dimensi_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul');
            $table->text('konten');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimensi_details');
    }
}
