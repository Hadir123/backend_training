<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
      
            $table->timestamps();
        
        });
        //artical_tag
        Schema::create('artical_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            $table->unsignedBigInteger('artical_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
            $table->unique(['artical_id','tag_id']);

            $table->foreign('artical_id')
            ->references('id')
            ->on('articals') 
            ->onDelete('cascade');
            $table->foreign('tag_id')
            ->references('id')
            ->on('tages')
            ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag');
    }
}
