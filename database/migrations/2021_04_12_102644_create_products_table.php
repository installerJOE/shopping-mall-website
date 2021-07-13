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
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->string('slug');
            $table->text('description');
            $table->integer('stock')->length(255)->default(0);
            $table->float('price')->length(10);
            $table->float('discount')->default(0);
            $table->integer('likes')->length(255)->default(0);
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');
            // $table->integer('category_id');
            $table->string('barcode');
            $table->string('image_url_1')->nullable();
            $table->string('image_url_2')->nullable();
            $table->string('image_url_3')->nullable();
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
        Schema::dropIfExists('products');
    }
}
