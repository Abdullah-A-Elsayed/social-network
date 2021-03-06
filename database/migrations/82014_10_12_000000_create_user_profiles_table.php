<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('fac_id')->nullable();
            $table->unsignedInteger('uni_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('restrict');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('restrict');
            $table->foreign('fac_id')->references('id')->on('facs')->onDelete('restrict');
            $table->foreign('uni_id')->references('id')->on('unis')->onDelete('restrict');
            $table->timestamps();
        });
         Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
