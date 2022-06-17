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
            $table->char('idNguoiDung', 5)->primary();
            $table->string('username', 32)->unique();   
            $table->string('password', 32);
            $table->string('hoVaTen', 128);
            $table->date('ngaySinh');
            $table->string('soDienThoai', 13)->unique();
            $table->string('email', 40)->unique();
            $table->char('idVaiTro', 5)->references('idVaiTro')->on('roles');
            $table->boolean('trangThaiHoatDong')->default(true);
            // $table->timestamp('email_verified_at')->nullable();
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
