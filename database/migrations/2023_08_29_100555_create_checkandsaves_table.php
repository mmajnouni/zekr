<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckandsavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkandsaves', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('zekr');
            $table->integer('allzekr');
            $table->integer('numberofdays')->nullable();
            $table->integer('everyday')->nullable();
            $table->integer('counter')->default(0);
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
        Schema::dropIfExists('checkandsaves');
    }
}
