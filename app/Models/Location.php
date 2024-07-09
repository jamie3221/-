<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'Lname', 'Lcity', 'Lstate_county', 'Lcountry',
    ];

    // Define the relationship with Customers (Location has many Customers)
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    // Define the relationship with ServiceProviders (Location has many ServiceProviders)
    public function serviceProviders()
    {
        return $this->hasMany(ServiceProvider::class);
    }
}
