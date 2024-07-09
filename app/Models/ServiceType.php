<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $fillable = [
        'typename', 'description',
    ];

    // Define the relationship with ServiceRequests (ServiceType has many ServiceRequests)
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
