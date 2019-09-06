<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinnerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('residential_address');
            $table->string('service_unit')->nullable();
            $table->year('year_joined');
            $table->integer('church_growth_squad')->unsigned();
            $table->integer('tel_no')->unsigned();
            $table->integer('whatsapp_tel_no')->nullable()->unsigned();
            $table->date('birth_date');
            $table->string('occupation');
            $table->string('marital_status');
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
        Schema::dropIfExists('members');
    }
}
