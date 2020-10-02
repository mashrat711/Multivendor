<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('details')->nullable();
            $table->double('price');
            $table->double('shipping_cost');
            $table->text('description')->nullable();
            $table->unsignedInteger('brand_id')->unsigned();
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('autoCategory_id')->nullable();
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
        Schema::dropIfExists('autoCategories');
    }
}
