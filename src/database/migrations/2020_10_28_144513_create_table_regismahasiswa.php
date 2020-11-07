<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegismahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblregmahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim',12);
            $table->string('nama',50);
            $table->string('jeniskelamin',10);
            $table->string('agama',15);
            $table->string('kewarganegaraan',5);
            $table->string('jurusan',30);
            $table->string('jenjang',15);
            $table->string('tahunakademik',6);
            $table->string('ttl',50);
            $table->string('alamat',50);
            $table->string('kota',20);
            $table->string('kodepos',12);
            $table->string('telepon',14);
            $table->string('namasekolah',20);
            $table->string('tahunmasuk',5);
            $table->string('namaorangtua',50);
            $table->string('alamatorangtua',50);
            $table->string('kota1',20);
            $table->string('kodepos1',12);
            $table->string('telepon1',14);
            $table->string('waktukuliah',12);
            $table->string('pilihmatkul',20);
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
        Schema::dropIfExists('tblregmahasiswa');
    }
}
