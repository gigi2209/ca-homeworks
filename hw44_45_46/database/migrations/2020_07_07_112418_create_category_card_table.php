<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('card_id');
            $table->timestamps();

            $table->unique(['card_id', 'category_id']);

            $table->foreign('card_id') 
                  ->references('id') 
                  ->on('card')  
                  ->onDelete('cascade');  

            $table->foreign('category_id') 
                  ->references('id') 
                  ->on('categories')  
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
        Schema::dropIfExists('category_card');
    }
}
