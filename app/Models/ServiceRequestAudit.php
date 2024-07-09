<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequestAudit extends Model
{
    protected $fillable = [
        'requestID', 'action', 'audit_timestamp', 'old_data', 'new_data', 'adminID',
    ];

    // Define the relationship with ServiceRequest (ServiceRequestAudit belongs to ServiceRequest)
    public function serviceRequest()
    {
        return $this->belongsTo(ServiceRequest::class, 'requestID');
    }

    // Define the relationship with SystemAdministrator (ServiceRequestAudit belongs to SystemAdministrator)
    public function administrator()
    {
        return $this->belongsTo(SystemAdministrator::class, 'adminID');
    }
}
