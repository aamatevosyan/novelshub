<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('original_name', 255)->unique();
            $table->jsonb('name');

            $table->foreignId('novel_type_id')
                ->index()
                ->constrained();

            $table->foreignId('author_id')
                ->index()
                ->constrained();

            $table->foreignId('language_id')
                ->index()
                ->constrained();

            $table->jsonb('data')->nullable();
            $table->integer('view_count')->unsigned()->default(0);
            $table->float('rating')->unsigned()->default(0.0);
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
        Schema::dropIfExists('novels');
    }
}
