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
        Schema::create('about_team_membars', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('designation');
            $table->text('image');
            $table->text('icon1');
            $table->text('url1');
            $table->text('icon2');
            $table->text('url2');
            $table->text('icon3');
            $table->text('url3');
            $table->text('icon4');
            $table->text('url4');
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
        Schema::dropIfExists('about_team_membars');
    }
};
