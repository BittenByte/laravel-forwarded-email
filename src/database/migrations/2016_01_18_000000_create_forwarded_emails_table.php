<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForwardedEmailsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('forwarded_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recipient');
            $table->string('sender');
            $table->string('subject');
            $table->string('from');
            $table->json('other_fields');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('forwarded_emails');
    }
}
