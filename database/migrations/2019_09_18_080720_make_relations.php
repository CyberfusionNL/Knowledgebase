<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('authors', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

//        Schema::table('categories', function (Blueprint $table) {
//            $table->foreign('parent_id')->references('id')->on('categories');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_author_id_foreign');
            $table->dropForeign('articles_category_id_foreign');
        });

        Schema::table('authors', function (Blueprint $table) {
            $table->dropForeign('authors_user_id_foreign');
        });

//        Schema::table('categories', function (Blueprint $table) {
//            $table->dropForeign('categories_parent_id_foreign');
//        });
    }
}
