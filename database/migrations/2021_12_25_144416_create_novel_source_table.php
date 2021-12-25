<?php

use Illuminate\Database\Migrations\Migration;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Tpetry\PostgresqlEnhanced\Support\Facades\Schema;

class CreateNovelSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel_source', function (Blueprint $table) {
            $table->id();
            $table->foreignId('novel_id')->constrained();
            $table->foreignId('source_id')->constrained();
            $table->jsonb('data');

            $table->index('novel_id')->include(['source_id', 'data']);
            $table->index('source_id')->include(['novel_id', 'data']);
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
        Schema::dropIfExists('novel_source');
    }
}
