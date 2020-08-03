<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->unsignedBigInteger('id_father')->nullable();;
            $table->foreign('id_father')->references('id')->on('members');

            $table->unsignedBigInteger('id_mother')->nullable();;
            $table->foreign('id_mother')->references('id')->on('members');

            $table->unsignedBigInteger('id_spouse')->nullable();;
            $table->foreign('id_spouse')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
