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
        Schema::create('contributor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('regnum');

            $table->string('state');
            $table->string('postcode');
            $table->string('location');

            $table->string('contactperson');
            $table->string('contactnumber');

            $table->string('website');
            $table->string('page');

            $table->string('moneyamount');
            $table->string('moneyother');
            $table->string('frequency');

            $table->boolean('goodsFoodGroceries');
            $table->boolean('goodsFurnitureFixing');
            $table->boolean('goodsElectricalItemsGadgets');
            $table->boolean('goodsTranspotation');
            $table->boolean('goodsEducationalMaterial');
            $table->boolean('other1');
            $table->string('otherGoods');
            $table->boolean('cleaning');
            $table->boolean('moving');
            $table->boolean('education');
            $table->boolean('other2');
            $table->string('otherServices');

            $table->boolean('relazone2');
            $table->boolean('lionsclubjb');
            $table->boolean('superpandateamklangvalley');
            $table->boolean('foodbank448');
            $table->boolean('other3');
            $table->string('otherOrganization');



            $table->string('message');
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
        Schema::dropIfExists('contributor');
    }
};
