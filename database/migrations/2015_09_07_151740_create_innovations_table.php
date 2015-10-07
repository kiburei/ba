<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInnovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('innovationTitle');
            $table->string('innovationDescription');
            $table->integer('innovationFund');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('fundingStatus')->default(0);
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
        Schema::drop('innovations');
    }
}
