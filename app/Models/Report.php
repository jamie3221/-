<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reporttype', 'generateddate', 'content', 'adminID',
    ];

    // Define the relationship with SystemAdministrator (Report belongs to SystemAdministrator)
    public function administrator()
    {
        return $this->belongsTo(SystemAdministrator::class, 'adminID');
    }
}
