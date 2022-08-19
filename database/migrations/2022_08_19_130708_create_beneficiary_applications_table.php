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
        Schema::create('beneficiary_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('postcode');
            $table->string('state');
            $table->string('location');
            $table->string('contact_person');
            $table->string('contact_num');
            $table->string('website');
            $table->string('webpage');
            $table->string('photo');
            $table->string('date');
            $table->string('time');
            $table->string('status');
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
        Schema::dropIfExists('beneficiary_applications');
    }
};