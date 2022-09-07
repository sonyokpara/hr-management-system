<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTier2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tier2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('employees');
            $table->string('fund_manager');
            $table->string('membership_number');
            $table->date('date_joined');
            $table->string('contribution_report');
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
        Schema::dropIfExists('tier2s');
    }
}
