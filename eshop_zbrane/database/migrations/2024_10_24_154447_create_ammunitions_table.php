<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmmunitionsTable extends Migration
{
    public function up()
    {
        Schema::create('ammunitions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('caliber');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ammunitions');
    }
}
