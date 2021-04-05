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
            $table->integer('cin',false,false)->unique();
            $table->integer('carte_sejour',false,false)->unique();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('picture',255);
            $table->date('date_of_birth');
            $table->string('adresse',255);
            $table->string('phone_number',50);
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
