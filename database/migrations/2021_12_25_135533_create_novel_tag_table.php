<?php

use Illuminate\Database\Migrations\Migration;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Tpetry\PostgresqlEnhanced\Support\Facades\Schema;

class CreateNovelTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('novel_id')->constrained();
            $table->foreignId('tag_id')->constrained();

            $table->index('novel_id')->include(['tag_id']);
            $table->index('tag_id')->include(['novel_id']);
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
        Schema::dropIfExists('novel_tag');
    }
}
