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
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('telp', 20);
            $table->string('jenkel', 25);
            $table->string('level', 50);
            $table->string('alamat');
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('kode_pos', 11);
            $table->string('province_id', 11);
            $table->string('regency_id', 11);
            $table->string('district_id', 11);
            $table->string('village_id', 11);
            $table->rememberToken();
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
