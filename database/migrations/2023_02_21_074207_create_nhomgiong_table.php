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
        Schema::create('nhomgiong', function (Blueprint $table) {
            $table->id();
            $table->string('nhomgiong_code', 10);
            $table->string('nhomgiong_ten', 255);
            $table->text('nhomgiong_mota')->nullable();
            $table->date('nhomgiong_ngayngam')->nullable();
            $table->date('nhomgiong_ngaycay')->nullable();

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
        Schema::dropIfExists('nhomgiong');
    }
};
