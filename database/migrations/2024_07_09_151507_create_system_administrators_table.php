<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemAdministratorsTable extends Migration
{
    public function up()
    {
        Schema::create('system_administrators', function (Blueprint $table) {
            $table->id();
            $table->string('Aname', 100);
            $table->string('Aemail', 100)->unique();
            $table->string('Apassword');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('system_administrators');
    }
}
