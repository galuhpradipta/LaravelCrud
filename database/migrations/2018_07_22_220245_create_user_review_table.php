<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->float('rating', 8, 2);
            $table->string('review');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE user_review ADD CONSTRAINT chk_rating_amount CHECK ( rating <= 5 );');
        DB::statement('ALTER TABLE user_review ADD CONSTRAINT chk_rating_amount CHECK ( rating >= 1 );');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_review');
    }
}
