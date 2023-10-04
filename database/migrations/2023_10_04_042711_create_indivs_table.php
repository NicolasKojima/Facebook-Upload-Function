<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->text("introduction");
            $table->string("profilepic");
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
        Schema::dropIfExists('indivs');
    }
};
