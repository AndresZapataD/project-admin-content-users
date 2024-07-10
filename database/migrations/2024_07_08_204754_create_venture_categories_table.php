<?php

// database/migrations/2024_07_08_000001_create_venture_categories_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentureCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('venture_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venture_categories');
    }
}
