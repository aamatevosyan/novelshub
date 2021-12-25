<?php

use Illuminate\Database\Migrations\Migration;
use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
use Tpetry\PostgresqlEnhanced\Support\Facades\Schema;

class CreateLanguageSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_source', function (Blueprint $table) {
            $table->id();

            $table->foreignId('language_id')->constrained();
            $table->foreignId('source_id')->constrained();

            $table->index('language_id')->include(['source_id']);
            $table->index('source_id')->include(['language_id']);

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
        Schema::dropIfExists('language_source');
    }
}
