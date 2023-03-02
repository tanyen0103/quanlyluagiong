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
        Schema::create('giatridotrongnha', function (Blueprint $table) {
            $table ->id();
            $table ->double('giatridotrongnha_giatri')->nullable();
            $table ->foreignId('chitieutrongnha_id')->constrained('chitieutrongnha');
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
        Schema::dropIfExists('giatridotrongnha');
    }
};
