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
        Schema::create('pivot_table_projet_typeleve', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->references('id')->on('projets')->onDelete('cascade');
            $table->foreignId('typeleve_id')->references('id')->on('type_leves')->onDelete('cascade');
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
        Schema::dropIfExists('pivot_table_projet_typeleve');
    }
};
