<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<<< HEAD:database/migrations/2022_01_11_123929_create_get_results_table.php
class CreateGetResultsTable extends Migration
========
class CreateBioStuAppliesTable extends Migration
>>>>>>>> get-admit:database/migrations/2022_01_08_032632_create_bio_stu_applies_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2022_01_11_123929_create_get_results_table.php
        Schema::create('get_results', function (Blueprint $table) {
            $table->id();
            $table->string('reg');

            $table->string('unit');

            $table->string('mark');
            $table->string('position');


========
        Schema::create('bio_stu_applies', function (Blueprint $table) {
            $table->increments('applstuid');
            $table->integer('roll')->nullable;
            $table->boolean('done')->default(0);
>>>>>>>> get-admit:database/migrations/2022_01_08_032632_create_bio_stu_applies_table.php
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
        Schema::dropIfExists('get_results');
    }
}
