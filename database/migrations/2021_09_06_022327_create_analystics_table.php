<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analystics', function (Blueprint $table) {
            $table->id();
            $table->string('user_browser');
            $table->string('user_device');
            $table->string('user_os');
            $table->string('user_language');
            $table->string('user_country'); 
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
        Schema::dropIfExists('analystics');
    }
}
