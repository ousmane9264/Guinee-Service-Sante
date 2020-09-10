<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->string('nom');
            $table->string('prenom');
            $table->string('genre');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('state')->default(1);
            $table->string('created');
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
        Schema::dropIfExists('customers');
    }
}
