<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsTable extends Migration
{
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('element_type_id');
            $table->unsignedBigInteger('section_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('multimedia_URL')->nullable();
            $table->string('forward_URL')->nullable();
            $table->timestamps();

            $table->foreign('element_type_id')->references('id')->on('element_types')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
