<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->longText('content')->nullable();
            $table->integer('rating')->nullable();
            $table->boolean('anonymous');
            $table->boolean('published')->default(true);
            $table->foreignId('user_id')
                ->default(0)
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('product_id')
                ->constrained('products')
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
        Schema::dropIfExists('reviews', function(Blueprint $table){
            $table->dropForeign('reviews_user_id_foreign');
            $table->dropForeign('reviews_product_id_foreign');
        });
    }
}
