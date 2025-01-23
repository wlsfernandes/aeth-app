<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsToTextInPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('content_en')->change();
            $table->text('content_es')->nullable()->change();
            $table->text('content_pt')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('content_en', 255)->change();
            $table->string('content_es', 255)->nullable()->change();
            $table->string('content_pt', 255)->nullable()->change();
        });
    }
}
