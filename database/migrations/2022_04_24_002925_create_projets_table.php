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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->text('presentation');
            $table->text('problematique');
            $table->text('desc_produit');
            $table->String('type_financement');
            $table->String('tourDeTable');
            $table->String('maturite');
            $table->String('marche_vise');
            $table->text('desc_concurrence');
            $table->String('strategieM');
            $table->date('date_leve');
            $table->double('montant_rech');
            $table->double('montant_sec');
            $table->String('pitchDeck');
            $table->text('objectifs');
            $table->double('chiffre_affaire_realise');
            $table->double('chiffre_affaire_previse');
            $table->text('avantage_concurrenciel');
            $table->bigInteger('pre_actions');
            $table->bigInteger('total_actions');
            $table->String('url_video')->nullable();
            $table->foreignId('startup_id')->on('startups')->onDelete('cascade');
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
        Schema::dropIfExists('projets');
    }
};
