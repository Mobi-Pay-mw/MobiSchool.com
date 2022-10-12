<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->foreignId( 'course_id' );
            $table->float( 'price' )->default(0.0);
            $table->enum( 'audience' , ['primary', 'secondary', 'tertiary'] );
            $table->enum( 'resource_type', ['audio_book', 'document'] );
            $table->text( 'url' );

            $table->timestamps();

            // $table->unsignedBigInteger('course_id');
            // $table->foreign('course_id')
            //     ->references('id')
            //     ->on('courses')
            // ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
};
