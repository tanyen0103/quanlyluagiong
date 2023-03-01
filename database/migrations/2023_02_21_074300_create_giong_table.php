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
        Schema::create('giong', function (Blueprint $table) {
            $table->id();
            $table->string('giong_ten', 255);
            $table->string('giong_ten_slug', 255);
            $table->string('giong_nguongoc', 255)->nullable();
            $table->text('giong_mota')->nullable();
            $table->string('giong_hinhanh', 255)->nullable();
            $table->foreignId('nhomgiong_id')->constrained('nhomgiong');
            $table->foreignId('kieuhinh_id')->constrained('kieuhinh');

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
        Schema::dropIfExists('giong');
    }
};
