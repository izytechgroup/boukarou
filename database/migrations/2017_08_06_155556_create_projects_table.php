<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->text('description');
            $table->text('idea')->nullable();
            $table->text('project_dev')->nullable();
            $table->string('owner')->nullable();
            $table->string('contact')->nullable();
            $table->enum('published', ['published', 'unpublished'])->default('unpublished');
            $table->enum('status', ['En cours', 'Terminé', 'Annulé'])->default('En cours');
            $table->datetime('published_at');
            $table->integer('last_updated_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
