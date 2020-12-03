<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->primary(['asking_id', 'responding_id']);
            $table->unsignedBigInteger('asking_id');
            $table->unsignedBigInteger('responding_id');
            $table->timestamps();

            $table->foreign('asking_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('responding_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
