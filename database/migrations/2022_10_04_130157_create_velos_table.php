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
        Schema::create('velos', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('code');
            $table->float('price_hour');
            $table->string('status');
            $table->enum('disponibility',["in_service","in_maintenance","broken"]);
            $table->mediumText('picture');
            $table->enum('type',["city_bike","children_bike","electric_bike",
        "bike_with_child_seat","tandem","cargo_bike","mountain_bike"]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('velos');
    }
};
