<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->char('idVaiTro', 5)->primary();
            $table->string('tenVaiTro', 32);
            $table->string('moTa', 256);
            $table->timestamps();
        });

        //create trigger to increment ID
        // DB::unprepared('
        //     CREATE TRIGGER `increment_id_vai_tro` BEFORE INSERT ON `roles` FOR EACH ROW BEGIN
        //         SET @id = (SELECT MAX(idVaiTro) FROM roles) + 1;
        //         SET new.idVaiTro = @id;
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
        Schema::dropIfExists('roles');
    }
}
