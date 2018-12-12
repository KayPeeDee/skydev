<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_owner')->unsigned();
            $table->integer('added_by')->unsigned();
            $table->string('client_name');
            $table->string('client_surname');
            $table->string('company');
            $table->string('position');
            $table->string('personal_mobile');
            $table->string('work_mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('twitter_handler')->nullable();
            $table->string('instagram_id')->nullable();
            $table->timestamps();

            $table->foreign('added_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('contact_owner')
                ->references('id')
                ->on('businesses')
                ->onDelete('cascade')
                ->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
