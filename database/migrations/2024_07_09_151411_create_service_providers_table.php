<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProvidersTable extends Migration
{
    public function up()
    {
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('SPname', 100);
            $table->string('SPemail', 100)->unique();
            $table->string('SPpassword');
            $table->string('SPservicetype', 100);
            $table->string('SPavailability', 100);
            $table->decimal('SPrating', 3, 2)->nullable();
            $table->foreignId('locationID')->constrained('locations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_providers');
    }
}
