<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestAuditsTable extends Migration
{
    public function up()
    {
        Schema::create('service_request_audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requestID')->constrained('service_requests');
            $table->string('action', 50);
            $table->timestamp('audit_timestamp')->default(now());
            $table->text('old_data')->nullable();
            $table->text('new_data')->nullable();
            $table->foreignId('adminID')->nullable()->constrained('system_administrators');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_request_audits');
    }
}
