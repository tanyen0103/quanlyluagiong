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
        Schema::create('loaisaubenh', function (Blueprint $table) {
            $table->id();
            $table->string('loaisaubenh_ten', 255);
            $table->string('loaisaubenh_ten_slug', 255);
            $table->string('loaisaubenh_donvi', 100)->nullable();
            $table->text('loaisaubenh_mota')->nullable();
            $table->string('loaisaubenh_hinhanh', 255)->nullable();

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
        Schema::dropIfExists('loaisaubenh');
    }
};
