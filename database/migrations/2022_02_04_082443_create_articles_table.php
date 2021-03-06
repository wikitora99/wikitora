<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('articles', function (Blueprint $table) {
      $table->id();      
      $table->string('title');
      $table->foreignId('user_id');
      $table->foreignId('category_id');
      $table->string('slug')->unique();
      $table->string('cover');
      $table->text('excerpt');
      $table->text('body');
      $table->bigInteger('views');
      $table->timestamp('published_at')
            ->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('articles');
  }
}
