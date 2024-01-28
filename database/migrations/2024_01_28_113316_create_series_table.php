<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('creator');
            $table->year('release_year');
            $table->string('genre');
            $table->decimal('rating', 2, 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('series');
    }
}
