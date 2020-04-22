<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('surname', 50);
            $table->string('street', 30);
            $table->string('zip', 20);
            $table->string('city', 50);
            $table->string('region', 50);
            $table->string('country', 3);
            $table->string('nationality', 3);
            $table->string('email', 70);
            $table->string('government_id', 50);
            $table->string('phone_code', 4);
            $table->string('phone', 20);
            $table->string('promissory_note', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
