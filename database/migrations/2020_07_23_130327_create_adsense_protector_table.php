<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsenseProtectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsense_protector', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_application');
            $table->string('ip')->unique();
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('id_application')->references('id')->on('applications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adsense_protector');
    }
}
