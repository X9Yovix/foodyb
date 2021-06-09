<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            /* $table->string('id_card',8)->unique(); */
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('picture',255)->nullable();
            /* $table->date('date_of_birth')->nullable(); */
            $table->string('adresse',255)->nullable();
            $table->string('phone_number',30)->nullable();
            $table->string('role',30)->default("client");
            $table->string('email',50)->unique();
            $table->string('password',255);
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
