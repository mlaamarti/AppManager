<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('packageName')->unique();
            $table->string('title');
            $table->string('icon');
            $table->string('developerName');
            $table->string('type');
            $table->string('category');
            $table->string('installs');
            $table->string('review');
            $table->unsignedBigInteger('id_account');
            $table->string('currentVersion');
            $table->longText('description');
            $table->boolean('status');
            $table->boolean('ad_status');
            $table->boolean('is_suspend');
            $table->timestamps();
            $table->foreign('id_account')->references('id')->on('accounts')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
