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
        Schema::create('tbl_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('Kd_Dokter',15)->unique()->nullable();
            $table->string('Nama_Dkt',25)->default('Marvin');
            $table->string('Specialis',30)->default('Ilmu Komputer');
            $table->string('Alamat_Dkt',50)->nullable();
            $table->string('No_Telepon_Dkt',15)->nullable();
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
        Schema::dropIfExists('tbl_dokter');
    }
};
