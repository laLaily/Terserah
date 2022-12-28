<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("dinein_transactions", function (Blueprint $table) {
            $table->id();
            $table->string("customer_name");
            $table->timestamp("transaction_date");
            $table->foreignId("seat_id");
            $table->integer("total_price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("dinein_transactions");
    }
};
