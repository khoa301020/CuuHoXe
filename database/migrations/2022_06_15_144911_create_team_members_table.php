<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->char('idNguoiDung', 5)->references('idNguoiDung')->on('users');
            $table->char('idDoiCuuHo', 5)->references('idDoiCuuHo')->on('teams');
            $table->timestamps();
        });

        //create trigger to increment ID
        // DB::unprepared('
        //     CREATE TRIGGER `increment_id_nguoi_dung` BEFORE INSERT ON `team_members` FOR EACH ROW BEGIN
        //         SET @id = (SELECT MAX(idNguoiDung) FROM team_members) + 1;
        //         SET new.idNguoiDung = @id;
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
        Schema::dropIfExists('team_members');
    }
}
