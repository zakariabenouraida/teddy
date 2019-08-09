<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('productCategory_id');
            $table->string('productName');
            $table->string('productDetails');
            $table->string('productImage');
            $table->integer('productPrice');
            $table->timestamps();
        });
        Schema::table('products',function ($table){
        $table->foreign('productCategory_id')->references('id')->on('prod_cates');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['category_id']);
        Schema::dropIfExists('products');
    }
}
