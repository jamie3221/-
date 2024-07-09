<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('Cname', 100);
            $table->string('Cemail', 100)->unique();
            $table->string('Cpassword');
            $table->string('Caddress', 100);
            $table->string('Cphone', 100);
            $table->date('Cbirthdate')->nullable();
            $table->enum('Cgender', ['male', 'female', 'other'])->nullable();
            $table->foreignId('locationID')->constrained('locations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
