<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicants', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('dateofBirth');
            $table->string('gender');
            $table->string('hscYear');
            $table->string('hscGpa');
            $table->string('hscBoard');
            $table->string('hscReg');
            $table->string('hscRoll');
            $table->string('sscYear');
            $table->string('sscGpa');
            $table->string('sscBoard');
            $table->string('sscReg');
            $table->string('sscRoll');
            $table->string('presentVillage');
            $table->string('presentUnion');
            $table->string('presentPostOffice');
            $table->string('presentThana');
            $table->string('presentDistrict');
            $table->string('permanentVillage');
            $table->string('permanentUnion');
            $table->string('permanentPostOffice');
            $table->string('permanentThana');
            $table->string('permanentDistrict');
            $table->string('unit');
            $table->string('profileImage');
            $table->string('signatureImage');
            $table->string('email');
            $table->string('phoneNo');
            $table->string('password');
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
        Schema::dropIfExists('aplicants');
    }
}
