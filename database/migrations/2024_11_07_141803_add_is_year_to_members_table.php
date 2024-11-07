<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsYearToMembersTable extends Migration
{
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->boolean('isYear')->default(false); // Adding the 'isYear' boolean column with a default value
        });
    }

    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('isYear');
        });
    }
}
