<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->text('photo');
            $table->string('surname',20);
            $table->string('name',20);
            $table->string('patronymic',20)->nullable();
            $table->string('email',40);
            $table->string('phone_number',15)->nullable();
            $table->string('site',50)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('city',40)->nullable();
            $table->string('work_place',50);
            $table->string('position',30)->nullable();
            $table->string('work_email',40)->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->text('comment')->nullable();
            $table->boolean('favourites')->default(0)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
