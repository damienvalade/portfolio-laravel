<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table){
            $table->id();
            $table->string('name',100);
            $table->date('date');
            $table->string('picture',50);
            $table->string('technologies',50);
            $table->longText('description');
            $table->string('url',100);
            $table->string('git',100);
            $table->string('slug',50);
            $table->unsignedBigInteger('project_type');
            $table->foreign('project_type')->references('id')->on('project_type');
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
        Schema::dropIfExists('project');
    }
}
