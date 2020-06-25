<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsmanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsmanagers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_application');
            $table->string('id_admob')->unique();
            $table->string('ads_text_admob');
            $table->string('banner_admob')->unique();
            $table->string('interstitial_admob')->unique();
            $table->string('native_admob')->unique();
            $table->string('reward_admob')->unique();
            $table->string('banner_facebook')->unique();
            $table->string('interstitial_facebook')->unique();
            $table->string('native_facebook')->unique();
            $table->string('native_banner_facebook')->unique();
            $table->string('medium_rectangle_facebook')->unique();
            $table->unsignedBigInteger('id_admob_acc');
            $table->unsignedBigInteger('id_facebook_acc');
            $table->string('type');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('id_application')->references('id')->on('applications')->onDelete('cascade');
            $table->foreign('id_admob_acc')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('id_facebook_acc')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adsmanagers');
    }
}
