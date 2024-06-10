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
        Schema::table('products', function (Blueprint $table) {
             $table->after('id', function ($table) {
				$table->unsignedBigInteger('cate_id');
				$table->foreign('cate_id')->references('id')->on('categories');
                $table->string('prod_name')->nullable();
                $table->string('prod_img')->nullable();
				$table->string('prod_desc')->nullable();
				$table->bigInteger('main_price')->nullable();
				$table->bigInteger('disc_price')->nullable();
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
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
