<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('role');
            $table->string('image');
            $table->text('biography');
            $table->string('q_title', 150);
            $table->text('q_text');
            $table->string('e_title', 150);
            $table->text('e_text');
            $table->string('c_title', 150);
            $table->text('c_text');
            $table->string('x_title', 150);
            $table->text('x_text');
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
        Schema::dropIfExists('characters');
    }
}
