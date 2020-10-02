<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->float('price')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('bed')->nullable();
            $table->string('bath')->nullable();
            $table->string('floor')->nullable();
            $table->string('living_room')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('property_type')->nullable();
            $table->string('pool')->nullable();
            $table->string('internet')->nullable();
            $table->string('cleaning')->nullable();
            $table->string('area')->nullable();
            $table->year('construction_year')->nullable();
            $table->longText('description')->nullable();
            $table->string('location')->nullable();
            $table->string('balcony')->nullable();
            $table->string('total_floor')->nullable();
            $table->string('insurance')->nullable();
            $table->string('car_parking')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('video')->nullable();
            $table->unsignedBigInteger('location_id');
            
            
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
        Schema::dropIfExists('properties');
    }
}
