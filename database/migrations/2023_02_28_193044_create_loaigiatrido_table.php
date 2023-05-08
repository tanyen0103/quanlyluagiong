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
        Schema::create('loaigiatrido', function (Blueprint $table) {
            $table->id();
            $table->string('loaigiatrido_ten', 100);
            $table->string('loaigiatrido_donvi', 100);
            $table->tinyInteger('phanloai', 1);
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
        Schema::dropIfExists('loaigiatrido');
    }
};
