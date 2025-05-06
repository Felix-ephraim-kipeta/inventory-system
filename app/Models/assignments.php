<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignments extends Model
{
    /** @use HasFactory<\Database\Factories\SsignmentsFactory> */
    use HasFactory;

    public function device()
    {
        return $this->belongsTo(device::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class); // User assigned to
    }

    public function location()
    {
        return $this->belongsTo(location::class);
    }

    public function assignedBy()
    {
        return $this->belongsTo(User::class, 'assigned_by'); // Admin
    }
}
