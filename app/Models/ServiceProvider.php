<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $fillable = [
        'SPname', 'SPemail', 'SPpassword', 'SPservicetype', 'SPavailability', 'SPrating', 'locationID',
    ];

    // Define the relationship with Location (ServiceProvider belongs to Location)
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Define the relationship with ServiceRequests (ServiceProvider has many ServiceRequests)
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    // Define the relationship with ServiceProviderReviews (ServiceProvider has many ServiceProviderReviews)
    public function serviceProviderReviews()
    {
        return $this->hasMany(ServiceProviderReview::class);
    }
}
