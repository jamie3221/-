<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'Cname', 'Cemail', 'Cpassword', 'Caddress', 'Cphone', 'Cbirthdate', 'Cgender', 'locationID',
    ];

    // Define the relationship with Location (Customer belongs to Location)
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Define the relationship with ServiceRequests (Customer has many ServiceRequests)
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }

    // Define the relationship with ServiceProviderReviews (Customer has many ServiceProviderReviews)
    public function serviceProviderReviews()
    {
        return $this->hasMany(ServiceProviderReview::class);
    }
}
