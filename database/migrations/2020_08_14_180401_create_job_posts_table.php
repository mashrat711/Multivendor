<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('vacancy')->nullable();
            $table->text('job_context')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('additional_requirements')->nullable();
            $table->text('location')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('deadline')->nullable();
            $table->text('apply')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('job_category_id');


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
        Schema::dropIfExists('job_posts');
    }
}
