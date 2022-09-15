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
        Schema::create('participants', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('name',255);
            $table->string('email',255);
            $table->string('phoneNo',255);
            $table->string('address',255);
            $table->string('workshopID',10);
            $table->foreign('workshopID')->references('id')->on('workshops')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
