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
        Schema::create('chitieusaubenh', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giong_id')->constrained('giong');
            $table->string('chitieusaubenh_chonloc')->nullable();
            $table->text('chitieusaubenh_danhgia')->nullable();

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
        Schema::dropIfExists('chitieusaubenh');
    }
};
