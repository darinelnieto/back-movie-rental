<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_rent', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rent_id')->constrained('rents')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('customer_id')->constrained('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('customer_rent');
    }
}
