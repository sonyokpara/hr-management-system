<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment__histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('employees');
            $table->string('name_of_employer')->nullable();
            $table->string('emp_location')->nullable();
            $table->date('emp_start_date')->nullable();
            $table->date('emp_end_date')->nullable();
            $table->integer('number_of_months')->nullable();
            $table->string('emp_last_job_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment__histories');
    }
}
