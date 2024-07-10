<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneursTable extends Migration
{
    public function up()
    {
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('state', ['approved', 'pending', 'rejected']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entrepreneurs');
    }
}
