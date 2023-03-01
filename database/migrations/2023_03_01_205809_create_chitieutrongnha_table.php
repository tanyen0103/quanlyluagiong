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
        Schema::create('chitieutrongnha', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giong_id')->constrained('giong');
            $table->string('chitieutrongnha_giec2', 255)->nullable();
            $table->string('chitieutrongnha_dorunghat', 255)->nullable();
            $table->string('chitieutrongnha_msvotrau', 255)->nullable();
            $table->string('chitieutrongnha_dangthoc', 255)->nullable();
            $table->string('chitieutrongnha_mausacgao', 255)->nullable();
            $table->string('chitieutrongnha_tl1000hat', 255)->nullable();
            $table->string('chitieutrongnha_doam', 255)->nullable();
            $table->string('chitieutrongnha_thom', 255)->nullable();
            $table->text('chitieutrongnha_danhgia')->nullable();

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
        Schema::dropIfExists('chitieutrongnha');
    }
};
