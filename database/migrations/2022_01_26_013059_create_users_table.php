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
            $table->string('nama', 100);
            $table->string('username', 30)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('id_outlet');
            $table->enum('role', ['admin', 'kasir', 'owner']);
            $table->timestamps();
            $table->foreign('id_outlet')->references('id')->on('outlet');
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
