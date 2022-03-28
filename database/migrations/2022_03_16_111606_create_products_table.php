<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('name') -> nullable() ;
            $table->string('description') -> nullable() ;
            $table->double('price') -> default(0) ;
            $table->integer('quantity') -> default(0) ;
            $table->string('colors_availaibles') -> nullable() ;
            $table->string('sizes_availaibles') -> nullable() ;
            $table->string('add_date') -> nullable() ;
            $table->string('category_name') -> nullable() ;
            $table->boolean('populary') -> default(0) ;
            $table->boolean('new_product') -> default(0) ;
            $table->string('particularity') -> nullable() ;
            $table->text('image') -> nullable() ;
            $table->text('image2') -> nullable() ;
            $table->text('image3') -> nullable() ;
            $table->text('image4') -> nullable() ;
            $table->text('image5') -> nullable() ;
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
