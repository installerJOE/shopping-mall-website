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
        Schema::enableForeignKeyConstraints();
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('description');
            $table->string('barcode');
            $table->string('image_url_1');
            $table->string('image_url_2');
            $table->string('image_url_3');
            $table->integer('likes')->length(255);
            $table->integer('quantity_in_stock')->length(255);
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products', function(Blueprint $table){
            $table->dropForeign('products_brand_id_foreign');
        });
    }
}
