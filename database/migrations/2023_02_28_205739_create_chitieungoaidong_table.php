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
        Schema::create('chitieungoaidong', function (Blueprint $table) {
            $table ->id();
            $table ->foreignId('giong_id')->constrained('giong');
            $table ->string('chitieungoaidong_phienla', 255)->nullable();
            $table ->string('chitieungoaidong_taila',255)->nullable();
            $table ->string('chitieungoaidong_gocnhanh',255)->nullable();
            $table ->string('chitieungoaidong_bela',255)->nullable();
            $table ->string('chitieungoaidong_gocla',255)->nullable();
            $table ->string('chitieungoaidong_msgocla',255)->nullable();
            $table ->string('chitieungoaidong_gocladong',255)->nullable();
            $table ->string('chitieungoaidong_thoatcb',255)->nullable();
            $table ->string('chitieungoaidong_msgocthan',255)->nullable();
            $table ->string('chitieungoaidong_dangbong',255)->nullable();
            $table ->string('chitieungoaidong_congtrucbong',255)->nullable();
            $table ->string('chitieungoaidong_rau',255)->nullable();

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
        Schema::dropIfExists('chitieungoaidong');
    }
};
