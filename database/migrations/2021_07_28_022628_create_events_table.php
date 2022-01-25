<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['free', 'paid']);
            $table->string('category');
            $table->string('zip');
            $table->string('location');
            $table->text('description');
            $table->string('videoUrl');
            $table->date('startDate');
            $table->time('startTime');
            $table->date('endDate');
            $table->time('endtTime');
            $table->string('timeZone');
            $table->string('collectionType');
            $table->string('infoToCollect');
            $table->string('eventReccurance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('events');
    }

}
