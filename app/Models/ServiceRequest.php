<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'customerID', 'serviceproviderID', 'servicetypeID', 'requestdate', 'requeststatus', 'cost',
    ];

    // Define the relationship with Customer (ServiceRequest belongs to Customer)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Define the relationship with ServiceProvider (ServiceRequest belongs to ServiceProvider)
    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    // Define the relationship with ServiceType (ServiceRequest belongs to ServiceType)
    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    // Define the relationship with ServiceRequestAudits (ServiceRequest has many ServiceRequestAudits)
    public function serviceRequestAudits()
    {
        return $this->hasMany(ServiceRequestAudit::class);
    }
}
