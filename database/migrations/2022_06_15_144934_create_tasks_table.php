<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->char('idNhiemVu', 5)->primary();
            $table->char('idSuCo', 5)->references('idSuCo')->on('accidents');
            $table->char('idDoiCuuHo', 5)->references('idDoiCuuHo')->on('teams');
            $table->enum('trangThaiNhiemVu', ['Đã nhận', 'Đang trên đường', 'Đang xử lý', 'Đã hoàn thành', 'Đã hủy'])->default('Đã nhận');
            $table->dateTime('thoiGianNhan');
            $table->dateTime('thoiGianHoanThanh');
            $table->timestamps();
        });
        
        //create trigger to increment ID
        // DB::unprepared('
        //     CREATE TRIGGER `increment_id_nhiem_vu` BEFORE INSERT ON `tasks` FOR EACH ROW BEGIN
        //         SET @id = (SELECT MAX(idNhiemVu) FROM tasks) + 1;
        //         SET new.idNhiemVu = @id;
        //     END
        // ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
