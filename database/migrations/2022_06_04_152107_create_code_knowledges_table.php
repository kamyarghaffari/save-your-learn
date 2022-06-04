<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeKnowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_knowledges', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->string('title' , 65)->index();
            $table->text('description' );
            $table->text('code');
            $table->enum('type' , ['simple_code' , 'function' , 'class' ,'trait', 'interface' , 'namespace']);
            $table->string('version' , 10);
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onUpdate('cascade');
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
        Schema::dropIfExists('code_knowleges');
    }
}
