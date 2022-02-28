<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleToReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('mtitle')->nullable();
            $table->string('pay_price')->nullable();
            $table->string('rprice')->nullable();
            $table->string('tprice')->nullable();
            $table->string('offer_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('mtitle')->nullable();
            $table->string('pay_price')->nullable();
            $table->string('rprice')->nullable();
            $table->string('tprice')->nullable();
            $table->string('offer_id')->nullable();
        });
    }
}
