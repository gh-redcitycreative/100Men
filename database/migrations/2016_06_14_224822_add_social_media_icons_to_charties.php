<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialMediaIconsToCharties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('charities', function (Blueprint $table) {
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('instagram_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('charities', function (Blueprint $table) {
            $table->dropColumn('facebook_url')->nullable();
            $table->dropColumn('twitter_url')->nullable();
            $table->dropColumn('youtube_url')->nullable();
            $table->dropColumn('instagram_url')->nullable();
        });
    }
}
