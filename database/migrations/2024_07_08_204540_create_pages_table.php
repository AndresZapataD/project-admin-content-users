<?php
// database/migrations/2024_07_08_000003_create_pages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Permitir valores nulos
            $table->string('url');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Cambiar a set null
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
