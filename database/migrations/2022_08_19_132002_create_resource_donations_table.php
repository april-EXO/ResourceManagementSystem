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
        Schema::create('resource_donations', function (Blueprint $table) {
            $table->id();
            $table->string('detail');
            $table->integer('quality');
            $table->string('unit');
            $table->integer('donation_records_id');
            $table->integer('resources_id');
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
        Schema::dropIfExists('resource_donations');
    }
};