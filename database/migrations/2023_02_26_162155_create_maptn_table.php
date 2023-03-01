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
        Schema::create('maptn', function (Blueprint $table) {
            $table->id();
            $table->string('ptn_code', 50);
            $table->text('ptn_mota')->nullable();
            $table->foreignId('giong_id')->constrained('giong');

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
        Schema::dropIfExists('maptn');
    }
};
