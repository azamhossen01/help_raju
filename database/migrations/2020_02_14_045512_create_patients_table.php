<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name');
            $table->string('guardian_name');
            $table->string('guardian_phone')->nullable();
            $table->string('address');
            $table->string('nid');
            $table->string('age');
            $table->enum('type',['fresher','older']);
            $table->enum('drug',['none', 'yaba','alchohol','marijuana']);
            $table->string('contruct_period')->nullable();
            $table->float('contruct_amount')->nullable();
            $table->float('advance_amount')->nullable();
            $table->date('joining_date');
            $table->string('image')->nullable();
            $table->text('comments')->nullabe();
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
        Schema::dropIfExists('patients');
    }
}
