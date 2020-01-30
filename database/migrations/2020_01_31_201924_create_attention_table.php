<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attention', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->integer('event_id')->unsigned()->nullable();;
            $table->integer('member_id')->unsigned()->nullable();;
            $table->integer('attend_date');
            $table->date('attend_start');
            $table->date('attend_end');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('event_id')->references('id')->on('event');
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attention');
    }
}
