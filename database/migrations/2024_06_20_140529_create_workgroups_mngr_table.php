<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkgroupsMngrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workgroups_mngr', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('refr');
            $table->text('desc');
            $table->string('locn');
            $table->integer('estartdate');
            $table->string('key1');
            $table->string('key2');
            $table->string('key3');
            $table->string('key4');
            $table->string('key5');
            $table->integer('n');
            $table->integer('admn');
            $table->integer('cord');
            $table->integer('oper');
            $table->integer('mngr');
            $table->string('mngr_email');
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
        Schema::dropIfExists('workgroups_mngr');
    }
}