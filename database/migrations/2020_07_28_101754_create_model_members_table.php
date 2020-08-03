<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document')->nullable();

            $table->string('address')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('telephone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('email')->nullable();

            $table->string('sexy')->nullable();
            $table->string('nationality')->nullable();

            $table->date('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();

            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('spouse_name')->nullable();

            $table->date('wedding_date')->nullable();

            $table->string('education_level')->nullable();
            $table->string('course')->nullable();

            $table->string('profession')->nullable();

            $table->date('baptism_date')->nullable();
            $table->string('baptism_church')->nullable();
            $table->string('coming_church')->nullable();
            $table->string('religious_formation')->nullable();

            $table->string('status')->nullable();
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
        Schema::dropIfExists('members');
    }
}
