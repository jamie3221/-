<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customerID')->constrained('customers');
            $table->foreignId('serviceproviderID')->constrained('service_providers');
            $table->foreignId('servicetypeID')->constrained('service_types');
            $table->date('requestdate');
            $table->string('requeststatus', 50);
            $table->float('cost');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
}
