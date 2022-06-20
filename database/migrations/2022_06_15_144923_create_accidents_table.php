<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidents', function (Blueprint $table) {
            $table->char('idNguoiDung', 5)->references('idNguoiDung')->on('users');
            $table->char('idSuCo', 5)->primary();
            $table->string('viTri', 100);
            $table->string('loaiPhuongTien', 32);
            $table->string('minhChung', 256);
            $table->enum('trangThaiSuCo', ['Chưa tiếp nhận', 'Đã tiếp nhận', 'Không được tiếp nhận'])->default('Chưa tiếp nhận');
            $table->dateTime('thoiGianGui');
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
        Schema::dropIfExists('accidents');
    }
}
