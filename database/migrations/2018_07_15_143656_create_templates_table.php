<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('form_structure')->nullable();
            $table->text('doc_structure')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->tinyInteger('due_date')->nullable();
            $table->tinyInteger('last_progress_step')->nullable();
            $table->boolean('completed')->unsigned()->default(0);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('authorized_by')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
