<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenturesTable extends Migration
{
    public function up()
    {
        Schema::create('ventures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entrepreneur_id');
            $table->string('name');
            $table->text('description');
            $table->string('NIT');
            $table->string('address');
            $table->string('phone');
            $table->string('logo_URL')->nullable();
            $table->timestamps();

            $table->foreign('entrepreneur_id')->references('id')->on('entrepreneurs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventures');
    }
}
