<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritikSaransTable extends Migration
{
    public function up()
    {
        Schema::create('kritik_sarans', function (Blueprint $table) {
            $table->id();
            $table->text('kritik');
            $table->text('saran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kritik_sarans');
    }
}
