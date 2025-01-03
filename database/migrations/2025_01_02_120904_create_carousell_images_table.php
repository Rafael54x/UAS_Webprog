<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarousellsTable extends Migration
{
    public function up()
    {
        Schema::create('carousells', function (Blueprint $table) {
            $table->id();
            $table->string('carousell'); // Store image file names or paths
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousells');
    }
}

