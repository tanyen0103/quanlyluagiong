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
        Schema::create('giatridosaubenh', function (Blueprint $table) {
            $table->id();
            $table->double('giatridosaubenh_giatri');
            $table->foreignId('chitieusaubenh_id')->constrained('chitieusaubenh');
            $table->foreignId('loaisaubenh_id')->constrained('loaisaubenh');

            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giatridosaubenh');
    }
};
