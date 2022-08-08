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
        Schema::create('connector', function (Blueprint $table) {
            $table->id();
            $table->string('projecttitle');
            $table->string('orgname');
            $table->string('orgregnum');

            $table->string('beneficiaryname');
            $table->string('beneficiarycontactperson');
            $table->string('beneficiarycontactnumber');

            $table->string('state');
            $table->string('postcode');
            $table->string('location');
            
            $table->string('beneficiarywebsite');
            $table->string('beneficiarypage');

            $table->date('date');
            $table->time('timestart');
            $table->time('timeend');

            $table->string('volunteernumber');
            $table->string('numberother');

            $table->string('moneyamount');
            $table->string('moneyother');
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
        Schema::dropIfExists('connector');
    }
};
