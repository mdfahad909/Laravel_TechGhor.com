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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('info_email');
            $table->string('info_mobile');
            $table->string('info_address');
            $table->string('info_facebook');
            $table->string('info_twitter');
            $table->string('info_pinterest');
            $table->string('info_instagram');
            $table->string('happy_client');
            $table->string('company');
            $table->string('project');
            $table->timestamps();
            $table->softDeletes();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information');
    }
};
