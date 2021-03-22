<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function(Blueprint $table){
            $table->foreignId('chapter_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('chapters', function(Blueprint $table){
            $table->foreignId('manga_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function(Blueprint $table){
            $table->dropForeign(['chapter_id']);
        });
        Schema::table('chapters', function(Blueprint $table){
            $table->dropForeign(['manga_id']);
        });
    }
}
