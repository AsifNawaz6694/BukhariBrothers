<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('username')->nullable();       
            $table->string('phone')->nullable();       
            $table->string('gender')->nullable();
            $table->string('d_o_b')->nullable();
            $table->string('profile_pic')->default('default.jpg');
            $table->string('address')->nullable();
            $table->string('social')->nullable();       
            $table->timestamps();
            /* Assigning Foreign key */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
