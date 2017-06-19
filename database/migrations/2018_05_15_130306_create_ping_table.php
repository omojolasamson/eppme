<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('pings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('user_id')->unsigned();
            $table->float('longitude');
            $table->float('latitude');
            $table->string('token');
            $table->string('organization')->nullable();
            $table->enum('status', ['INITIATED', 'SEEN BY ADMIN', 'SUBMITTED TO AGENCY'])->default('INITIATED');
            $table->timestamp('deleted_at');
            $table->timestamps();

        });


        Schema::table('pings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pings');
    }
}
