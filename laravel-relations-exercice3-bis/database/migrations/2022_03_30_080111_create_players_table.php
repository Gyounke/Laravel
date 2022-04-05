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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->integer('age');
            $table->string('gender');
            $table->string("email")->unique();
            $table->string('phone');
            $table->string('country');
            $table->foreignId('role_id')->constrained("roles", "id");
            $table->foreignId('team_id')->constrained('teams', 'id');
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
        Schema::dropIfExists('players');
    }
};
