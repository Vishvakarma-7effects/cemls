<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) 
        {
            $table->text('address_line1')->after('address')->nullable();
            $table->text('address_line2')->after('address_line1')->nullable();
            $table->string('city')->after('address_line2')->nullable();
            $table->string('state')->after('city')->nullable();
            $table->Integer('zip')->after('state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
}
