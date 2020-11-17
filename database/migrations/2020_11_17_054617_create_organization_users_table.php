<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('organization_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('emergency_contact_person');
            $table->string('emergency_person_phone');
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
        Schema::dropIfExists('organization_users');
    }
}
