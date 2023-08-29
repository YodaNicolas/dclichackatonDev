<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            $table->string('cv')->nullable();
            $table->mediumText('demo1')->nullable();
            $table->string('code_competence')->default('0000000000');
            $table->string('lien1')->nullable();
            $table->string('titre1')->nullable();
            $table->string('lien2')->nullable();
            $table->string('titre2')->nullable();
            $table->string('lien3')->nullable();
            $table->string('titre3')->nullable();
            $table->string('lien4')->nullable();
            $table->string('titre4')->nullable();
            $table->string('projet1')->nullable();
            $table->mediumText('description1')->nullable();
            $table->string('projet2')->nullable();
            $table->mediumText('description2')->nullable();
            $table->string('projet3')->nullable();
            $table->mediumText('description3')->nullable();
            $table->string('projet4')->nullable();
            $table->mediumText('description4')->nullable();
            $table->mediumText('biographie')->nullable();
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
        Schema::dropIfExists('fiches');
    }
}
