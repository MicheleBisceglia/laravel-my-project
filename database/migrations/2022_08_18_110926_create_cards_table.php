<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('ruolo', 10);
            $table->text('img');
            $table->string('pac', 6);
            $table->string('sho', 6);
            $table->string('pas', 6);
            $table->string('dri', 6);
            $table->string('def', 6);
            $table->string('phy', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
