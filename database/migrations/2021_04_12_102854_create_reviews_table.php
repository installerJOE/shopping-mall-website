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
            $table->longText('comment');
            $table->integer('rating');
            // $table->index('user_id');
            $table->boolean('anonymous');
            $table->foreignId('user_id')
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
