<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialNetworksTypesTable extends Migration
{
    public function up()
    {
        Schema::create('social_networks_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_URL')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_networks_types');
    }
}
