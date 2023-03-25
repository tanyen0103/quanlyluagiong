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
        Schema::create('giatridochitiet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giatridongoaidong_id')->constrained('giatridongoaidong');
            $table->foreignId('giatridotrongnha_id')->constrained('giatridotrongnha');
            $table->foreignId('giatridosaubenh_id')->constrained('giatridosaubenh');

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
        Schema::dropIfExists('giatridochitiet');
    }
};
