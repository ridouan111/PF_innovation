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
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->String('nom')->unique();
            $table->String('siteWeb')->nullable();
            $table->String('email');
            $table->String('Tele');
            $table->date('date_creation');
            $table->String('form_juridique');
            $table->bigInteger('nbr_collab');
            $table->String('token_paypal');
            $table->String('RIB');
            $table->double('chiffre_affaire');
            $table->double('capitale');
            $table->String('code_postal');
            $table->text('adresse');
            $table->String('ICF');
            $table->String('tresorerie');
            $table->String('smLinks');
            $table->foreignId('user_id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('startups');
    }
};
