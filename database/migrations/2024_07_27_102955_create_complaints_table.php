<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('complaints', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Create the user_id column
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Add this line
        $table->string('name');
        $table->string('email');
        $table->string('address');
        $table->string('title');
        $table->text('description');
        $table->timestamps();
    });
}


public function down()
{
    Schema::table('complaints', function (Blueprint $table) {
    //     $table->dropColumn(['name', 'email', 'password']);
    //     $table->text('description')->change(); // Revert description field if it was changed
    });
}

    /**
     * Run the migrations.
     */
    
};
