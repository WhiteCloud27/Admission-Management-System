<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawstudents', function (Blueprint $table) 
        {
            $table -> increments('stuid');
            $table -> string('fname',100) -> nullable;
            $table -> string('lname',100) -> nullable;
            $table -> integer('roll') -> nullable;
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawstudents');
    }
}
