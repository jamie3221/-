<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemAdministrator extends Model
{
    protected $fillable = [
        'Aname', 'Aemail', 'Apassword',
    ];

    // Define the relationship with Reports (SystemAdministrator has many Reports)
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    // Define the relationship with ServiceRequestAudits (SystemAdministrator has many ServiceRequestAudits)
    public function serviceRequestAudits()
    {
        return $this->hasMany(ServiceRequestAudit::class);
    }
}
