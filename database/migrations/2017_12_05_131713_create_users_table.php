<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('id', '50')->primary();
            $table->enum('level', ['admin', 'svp', 'siswa']);
            $table->string('full_name', '100');
            $table->string('email', '100')->unique();
            $table->string('password');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('nomor_hp', '15');
            $table->string('nama_ayah', '100');
            $table->string('nama_ibu', '100');
            $table->integer('id_kelas')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');;
        });

        // Insert some stuff
        DB::table('users')->insert(
            [
                'id' => '201231112',
                'level' => 'admin',
                'full_name' => 'M Ridwan Hanafi',
                'email' => 'mridwanhanafi@gmail.com',
                'password' => bcrypt('123456'),
                'tgl_lahir' => '1994-06-05',
                'alamat' => 'Jalan Bahagia Blok D9 No. 12',
                'nomor_hp' => '085763431919',
                'nama_ayah' => 'Misdianto',
                'nama_ibu' => 'Kasiani',
            ]
        );
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
