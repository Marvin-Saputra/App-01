<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_obat', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_Obat',15)->unique()->nullable();
            $table->string('Nama_Obt',30)->default('Nama Obat');
            $table->string('Jenis_Obt',50)->default('Jenis Obat');
            $table->string('Kategori',30)->nullable();
            $table->decimal('Hrg_Obt',8)->nullable();
            $table->integer('Jmlh_Obt',)->nullable();
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
        Schema::dropIfExists('tbl_obat');
    }
};
