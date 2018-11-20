<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portalpts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('instansi');	
			$table->string('jalur');
			$table_>integer('biaya');
			$table->date('registrasi');
			$table->date('penutupan');
            $table->date('tes');
            $table->date('pengumuman');
			$table->date('daftarulang');
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
        Schema::dropIfExists('portalpts');
    }
}
