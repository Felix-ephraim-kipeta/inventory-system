<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device_state_history extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceStateHistoryFactory> */
    use HasFactory;

    public function device()
    {
        return $this->belongsTo(device::class);
    }

    public function fromState()
    {
        return $this->belongsTo(device_state::class, 'from_state_id');
    }

    public function toState()
    {
        return $this->belongsTo(device_state::class, 'to_state_id');
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
