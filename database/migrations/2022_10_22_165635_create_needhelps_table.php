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
        Schema::create('needhelps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('users')->onDelete();
            $table->integer('type')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->decimal('monetary')->nullable();
            $table->string('picture')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('needhelps');
    }
};
