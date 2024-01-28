<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('movie_id')->nullable()->constrained();
            $table->foreignId('book_id')->nullable()->constrained();
            $table->foreignId('album_id')->nullable()->constrained();
            $table->foreignId('serie_id')->nullable()->constrained();
            $table->decimal('rating', 2, 1);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
