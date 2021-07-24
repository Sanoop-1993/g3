<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('job_number');
            $table->integer('customer_number');
            $table->integer('aircraft_number');
            $table->integer('port_number');
            $table->integer('serial_number');
            $table->integer('tsn');
            $table->integer('tsd');
            $table->string('work_details');
            $table->integer('po_no');
            $table->string('file');
            $table->string('notes');
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
        Schema::dropIfExists('jobs');
    }
}
