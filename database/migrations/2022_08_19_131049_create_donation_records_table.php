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
        Schema::create('donation_records', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('date');
            $table->time('time');
            $table->string('method');
            $table->string('detail');
            $table->string('comment');
            $table->string('status');
            $table->integer('beneficiary_id');
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
        Schema::dropIfExists('donation_records');
    }
};