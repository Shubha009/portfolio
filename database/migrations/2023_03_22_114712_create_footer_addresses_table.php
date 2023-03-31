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
        Schema::create('footer_addresses', function (Blueprint $table) {
            $table->id();
            $table->text('company_name')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('copywrite_first')->nullable();
            $table->text('copywrite_name')->nullable();
            $table->text('copywrite_last')->nullable();
            $table->text('developer_name')->nullable();
            $table->text('developer_url')->nullable();
            $table->text('twitter_icon')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('facebook_icon')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('instragram_icon')->nullable();
            $table->text('instragram_url')->nullable();
            $table->text('skype_icon')->nullable();
            $table->text('skype_url')->nullable();
            $table->text('linkedin_icon')->nullable();
            $table->text('linkedin_url')->nullable();
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
        Schema::dropIfExists('footer_addresses');
    }
};
