<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsToProspectingLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prospecting_lists', function (Blueprint $table) {
            $table->string('company_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('work_email')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_company_name')->nullable();
            $table->string('new_departments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prospecting_lists', function (Blueprint $table) {
            //
        });
    }
}
