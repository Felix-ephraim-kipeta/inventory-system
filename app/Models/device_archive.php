<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device_archive extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceArchiveFactory> */
    use HasFactory;

    public function device()
    {
        return $this->belongsTo(device::class);
    }

    public function archivedBy()
    {
        return $this->belongsTo(User::class, 'archived_by');
    }
}
