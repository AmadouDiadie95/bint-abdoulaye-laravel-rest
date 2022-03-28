<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('id');
            $table->string('commande_date') -> nullable() ;
            $table->string('client_name') -> nullable() ;
            $table->string('client_prenom') -> nullable() ;
            $table->string('client_adresse') -> nullable() ;
            $table->string('client_email') -> nullable() ;
            $table->string('client_tel') -> nullable() ;
            $table->string('product_name') -> nullable() ;
            $table->double('product_price') -> default(0) ;
            $table->integer('quantity_choiced') -> default(0) ;
            $table->double('total_price') -> default(0) ;
            $table->string('color_choiced') -> nullable() ;
            $table->string('size_choiced') -> nullable() ;
            $table->string('particularity') -> nullable() ;
            $table->boolean('done') -> default(0) ;
            $table->string('commande_done_date') -> nullable() ;
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
        Schema::dropIfExists('commandes');
    }
}
