<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProviderReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('service_provider_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('serviceproviderID')->constrained('service_providers');
            $table->foreignId('customerID')->constrained('customers');
            $table->decimal('rating', 3, 2);
            $table->text('review_text')->nullable();
            $table->date('review_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_provider_reviews');
    }
}
