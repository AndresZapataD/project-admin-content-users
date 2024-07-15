<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentureSocialNetworksTable extends Migration
{
    public function up()
    {
        Schema::create('venture_social_networks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venture_id');
            $table->unsignedBigInteger('social_network_id');
            $table->string('URL');
            $table->timestamps();

            $table->foreign('venture_id')->references('id')->on('ventures')->onDelete('cascade');
            $table->foreign('social_network_id')->references('id')->on('social_networks_types')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('venture_social_networks');
    }
}

