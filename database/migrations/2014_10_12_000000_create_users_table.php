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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->String('prenom');
            $table->date('date_naissance');
            $table->text('adresse');
            $table->String('ville');
            $table->String('codePosale');
            $table->String('Tele');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->String('type');
            $table->String('photo')->nullable();
            $table->String('typeInv')->nullable();
            $table->String('type_societe')->nullable();
            $table->text('desc')->nullable();
            $table->integer('nbr_inv_par_an')->nullable();
            $table->String('nomBanque')->nullable();
            $table->String('serie')->nullable();
            $table->double('teckitMoyen')->nullable();
            $table->double('ticketMax')->nullable();
            $table->double('tickerMin')->nullable();
            $table->double('tourDeTable')->nullable();
            $table->double('tourDeTableMax')->nullable();
            $table->double('tourDeTableMin')->nullable();
            $table->String('typeLeve')->nullable();
            $table->String('siteWeb')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
