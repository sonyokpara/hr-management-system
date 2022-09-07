<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_reference', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('staff_id')->constrained('employees');
            $table->string('ref_name');
            $table->string('ref_occupation');
            $table->string('ref_employer');
            $table->string('ref_address');
            $table->string('ref_contact_number');
            $table->string('ref_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_reference');
    }
}
