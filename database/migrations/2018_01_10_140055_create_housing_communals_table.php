<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousingCommunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housing_communals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('house');
            $table->string('gas');
            $table->string('cold_water');
            $table->string('hot_water');
            $table->string('drainage');
            $table->string('centralized_heating');
            $table->string('electricity_supply');
            $table->string('household_waste_removal');
            $table->integer('user_id');
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
        Schema::dropIfExists('housing_communals');
    }
}
