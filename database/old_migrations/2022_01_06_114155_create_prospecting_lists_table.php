<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospecting_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('list_id')->nullable();
            $table->integer('user_id')->nullable();
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
            $table->string('departments')->nullable();
            $table->string('seniority')->nullable();
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
        Schema::dropIfExists('prospecting_lists');
    }
}
