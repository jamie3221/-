<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProviderReview extends Model
{
    protected $fillable = [
        'serviceproviderID', 'customerID', 'rating', 'review_text', 'review_date',
    ];

    // Define the relationship with ServiceProvider (ServiceProviderReview belongs to ServiceProvider)
    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    // Define the relationship with Customer (ServiceProviderReview belongs to Customer)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
