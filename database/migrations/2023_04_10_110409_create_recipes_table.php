<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('picture')->nullable()->default(null);
            $table->longText('preparation');
            $table->decimal('portion_size',10,2)->default(0);
            $table->enum('portion_units',['gr','kg','lb','oz','ml','lt','fl.oz','Tbsp', 'tsp', 'pt', 'qt'])->default('gr');
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
        Schema::dropIfExists('recipes');
    }
}
