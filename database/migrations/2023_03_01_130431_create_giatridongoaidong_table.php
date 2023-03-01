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
        Schema::create('giatridongoaidong', function (Blueprint $table) {
            $table ->id();
            $table ->double('giatridongoaidong_giatri')->nullable();
            $table ->foreignId('chitieungoaidong_id')->constrained('chitieungoaidong');
            $table ->foreignId('loaigiatrido_id')->constrained('loaigiatrido');

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
        Schema::dropIfExists('giatridongoaidong');
    }
};
