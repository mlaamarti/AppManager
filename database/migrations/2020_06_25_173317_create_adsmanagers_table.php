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
            $table->unsignedBigInteger('id_application')->unique();
            $table->string('id_admob')->nullable();
            $table->string('ads_text_admob')->nullable();
            $table->string('banner_admob')->nullable();
            $table->string('interstitial_admob')->nullable();
            $table->string('native_admob')->nullable();
            $table->string('reward_admob')->nullable();
            $table->string('banner_facebook')->nullable();
            $table->string('interstitial_facebook')->nullable();
            $table->string('native_facebook')->nullable();
            $table->string('native_banner_facebook')->nullable();
            $table->string('medium_rectangle_facebook')->nullable();
            $table->unsignedBigInteger('id_admob_acc');
            $table->unsignedBigInteger('id_facebook_acc');
            $table->integer("fillrate_admob")->nullable();
            $table->integer("click_admob")->nullable();
            $table->integer("fillrate_facebook")->nullable();
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
