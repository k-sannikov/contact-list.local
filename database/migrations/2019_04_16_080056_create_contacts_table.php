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
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->comment('Пользователь');
            $table->string('surname', 100)->comment('Фамилия');
            $table->string('name', 100)->comment('Имя');
            $table->string('patronymic', 100)->nullable()->comment('Отчество');
            $table->string('organization')->nullable()->comment('Организация');
            $table->string('INN', 12)->nullable()->comment('ИНН');
            $table->string('department')->nullable()->comment('Отдел');
            $table->string('position')->nullable()->comment('Должность');
            $table->string('phone_work', 12)->comment('Рабочий телефон');
            $table->string('phone_mobile', 12)->nullable()->comment('Мобильный телефон');
            $table->string('email')->nullable()->comment('E-mail');
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
