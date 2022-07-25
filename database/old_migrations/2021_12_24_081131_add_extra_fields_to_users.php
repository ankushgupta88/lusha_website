<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('last_name', 15)->after('name')->nullable();;
            $table->enum('user_type', ['Admin', 'Customer', 'Subscriber','Guest','Sales','Recruiting','Marketing','Mevelopment'])->default('Customer')->after('email')->nullable();
           $table->string('phone', 15)->unique()->after('user_type')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
