<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create function to return next id
        DB::unprepared('
            DROP FUNCTION IF EXISTS next_id;
            CREATE FUNCTION next_id(count INT, prefix VARCHAR(2)) RETURNS VARCHAR(5)
            BEGIN
            DECLARE next VARCHAR(5);
                SET count = count + 1;
                SET next = CONCAT(prefix, LPAD(count, 3, 0));
                RETURN next;
            END
        ');

        // increment ID for users
        DB::unprepared('
        DROP TRIGGER IF EXISTS increment_id_nguoi_dung;
        CREATE TRIGGER increment_id_nguoi_dung BEFORE INSERT ON users 
        FOR EACH ROW BEGIN
            IF (SELECT COUNT(*) FROM users) = 0 THEN
                SET new.idNguoiDung = next_id(0, "ND");
            ELSE
                SET new.idNguoiDung = next_id((SELECT COUNT(*) FROM users), "ND");
            END IF;
        END
        ');

        // increment ID for roles
        DB::unprepared('
        DROP TRIGGER IF EXISTS increment_id_vai_tro;
        CREATE TRIGGER increment_id_vai_tro BEFORE INSERT ON roles
        FOR EACH ROW BEGIN
            IF (SELECT COUNT(*) FROM roles) = 0 THEN
                SET new.idVaiTro = next_id(0, "VT");
            ELSE
                SET new.idVaiTro = next_id((SELECT COUNT(*) FROM roles), "VT");
            END IF;
        END
        ');

        // increment ID for teams
        DB::unprepared('
        DROP TRIGGER IF EXISTS increment_id_doi_cuu_ho;
        CREATE TRIGGER increment_id_doi_cuu_ho BEFORE INSERT ON teams
        FOR EACH ROW BEGIN
            IF (SELECT COUNT(*) FROM teams) = 0 THEN
                SET new.idDoiCuuHo = next_id(0, "DC");
            ELSE
                SET new.idDoiCuuHo = next_id((SELECT COUNT(*) FROM teams), "DC");
            END IF;
        END
        ');
        
        // increment ID for accidents
        DB::unprepared('
        DROP TRIGGER IF EXISTS increment_id_su_co;
        CREATE TRIGGER increment_id_su_co BEFORE INSERT ON accidents
        FOR EACH ROW BEGIN
            IF (SELECT COUNT(*) FROM accidents) = 0 THEN
                SET new.idSuCo = next_id(0, "SC");
            ELSE
                SET new.idSuCo = next_id((SELECT COUNT(*) FROM accidents), "SC");
            END IF;
        END
        ');
        
        // increment ID for tasks
        DB::unprepared('
        DROP TRIGGER IF EXISTS increment_id_nhiem_vu;
        CREATE TRIGGER increment_id_nhiem_vu BEFORE INSERT ON tasks
        FOR EACH ROW BEGIN
            IF (SELECT COUNT(*) FROM tasks) = 0 THEN
                SET new.idNhiemVu = next_id(0, "NV");
            ELSE
                SET new.idNhiemVu = next_id((SELECT COUNT(*) FROM tasks), "NV");
            END IF;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('triggers');
    }
}
