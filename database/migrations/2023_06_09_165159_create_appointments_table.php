<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id')->unsigned();
            $table->integer('professional_id')->unsigned();
            $table->date('datetime')->default("2023-06-19T17:04:23+00:00");
            $table->foreign('patient_id')->references('id')
                 ->on('patient')->onDelete('cascade');
            $table->foreign('professional_id')->references('id')
                ->on('profissional')->onDelete('cascade');
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
        Schema::dropIfExists('appointment');
    }
}
