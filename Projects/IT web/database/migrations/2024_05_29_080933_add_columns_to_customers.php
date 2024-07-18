<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('password')->nullable();
				$table->string('gender')->nullable();
				$table->string('lag')->nullable();
				$table->bigInteger('mobile')->nullable();
				$table->string('img')->nullable();
				$table->unsignedBigInteger('cid');
				$table->foreign('cid')->references('id')->on('countries');
				$table->enum('status',['Block','Unblock'])->default('Unblock');

            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
};
