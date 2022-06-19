<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->char('idDoiCuuHo', 5)->primary();
            $table->string('tenDoiCuuHo', 32);
            $table->timestamps();
        });

        //create trigger to increment ID
        // DB::unprepared('
        //     CREATE TRIGGER `increment_id_doi_cuu_ho` BEFORE INSERT ON `teams` FOR EACH ROW BEGIN
        //         SET @id = (SELECT MAX(idDoiCuuHo) FROM teams) + 1;
        //         SET new.idDoiCuuHo = @id;
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
        Schema::dropIfExists('teams');
    }
}
