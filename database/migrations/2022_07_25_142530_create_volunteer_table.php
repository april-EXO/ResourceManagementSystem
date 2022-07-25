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
        Schema::create('volunteer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ic');

            $table->string('contactnumber');
            $table->string('email');

            $table->string('state');
            $table->string('postcode');
            $table->string('location');
          
            $table->string('page');

            $table->boolean('cleaning');
            $table->boolean('moving');
            $table->boolean('education');
            $table->boolean('other1');
            $table->string('otherServices');

            $table->boolean('SATtime1');
            $table->boolean('SATtime2');
            $table->boolean('SATtime3');
            $table->boolean('SATtime4');
            $table->boolean('SATother');
            $table->string('SATothertime');

            $table->boolean('SUNtime1');
            $table->boolean('SUNtime2');
            $table->boolean('SUNtime3');
            $table->boolean('SUNtime4');
            $table->boolean('SUNother');
            $table->string('SUNotherTime');

            $table->boolean('MONtime1');
            $table->boolean('MONtime2');
            $table->boolean('MONtime3');
            $table->boolean('MONtime4');
            $table->boolean('MONother');
            $table->string('MONotherTime');

            $table->boolean('TUEStime1');
            $table->boolean('TUEStime2');
            $table->boolean('TUEStime3');
            $table->boolean('TUEStime4');
            $table->boolean('TUESother');
            $table->string('TUESotherTime');

            $table->boolean('WEDtime1');
            $table->boolean('WEDtime2');
            $table->boolean('WEDtime3');
            $table->boolean('WEDtime4');
            $table->boolean('WEDother');
            $table->string('WEDotherTime');

            $table->boolean('THURtime1');
            $table->boolean('THURtime2');
            $table->boolean('THURtime3');
            $table->boolean('THURtime4');
            $table->boolean('THURother');
            $table->string('THURotherTime');

            $table->boolean('FRItime1');
            $table->boolean('FRItime2');
            $table->boolean('FRItime3');
            $table->boolean('FRItime4');
            $table->boolean('FRIother');
            $table->string('FRIotherTime');


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
        Schema::dropIfExists('volunteer');
    }
};
