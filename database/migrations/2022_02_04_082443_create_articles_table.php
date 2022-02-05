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
      // $table->foreignId('author')
      //       ->constrained('users')
      //       ->onUpdate('cascade');
      $table->string('title');
      $table->foreignId('category')
            ->constrained('categories')
            ->onUpdate('cascade');
      $table->string('tags');
      $table->string('slug')->unique();
      $table->string('cover');
      $table->string('excerpt');
      $table->text('body');
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
