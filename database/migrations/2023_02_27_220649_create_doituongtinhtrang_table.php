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
        Schema::create('doituongtinhtrang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giaidoantruongthanh_id')->constrained('giaidoantruongthanh');
            $table->string('doituongtt_ten', 255);
            $table->text('doituongtt_mota')->nullable();

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
        Schema::dropIfExists('doituongtinhtrang');
    }
};
