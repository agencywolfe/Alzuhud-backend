<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cities')) {
            Schema::create('cities', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',255);
                $table->unsignedInteger('country_id');
                $table->unsignedInteger('state_id');
                $table->tinyInteger('flag')->default(1);
                $table->timestamps();

//            $table->foreign('country_id')
//                ->references('id')->on('countries')->onDelete('cascade');
//            $table->foreign('state_id')
//                ->references('id')->on('states')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
