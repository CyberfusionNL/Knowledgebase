<?php

use App\Article;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->enum('type', ['learn', 'changes', 'explore']);
            $table->string('title', 64);
            $table->string('slug', 64)->unique();
            $table->string('short_summary', 192);
            $table->longText('body');
            $table->string('state', 9)->default('draft');
            $table->timestamp('publish_date')->nullable();
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
        Schema::drop('articles');
    }
}
