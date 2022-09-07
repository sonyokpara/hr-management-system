<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextOfKinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_of_kins', function (Blueprint $table) {
            $table->id();
            $table->string('nk_name');
            $table->foreignId('staff_id')->constrained('employees');
            $table->string('nk_other_name')->nullable();
            $table->string('nk_relation_to_staff');
            $table->string('nk_contact_number');
            $table->string('nk_place_of_residence');
            $table->string('nk_residential_address');
            $table->string('nk_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('next_of_kins');
    }
}
