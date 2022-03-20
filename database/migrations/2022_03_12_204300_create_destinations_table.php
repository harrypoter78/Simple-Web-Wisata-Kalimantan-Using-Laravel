<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id('destination_id');
            $table->string('destination_name', 100);
            $table->text('destination_description');
            $table->string('destination_location', 500);
            $table->string('destination_day_temp', 4);
            $table->string('destination_night_temp', 4);
            $table->integer('destination_rating');
            $table->binary('destination_image')->nullable(true);
            $table->enum('destination_category', ['alam', 'kota']);
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
        Schema::dropIfExists('destinations');
    }
}
