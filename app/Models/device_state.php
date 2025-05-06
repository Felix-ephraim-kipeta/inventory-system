<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device_state extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceStateFactory> */
    use HasFactory;

    public function devices()
    {
        return $this->hasMany(device::class);
    }

    public function fromStateHistories()
    {
        return $this->hasMany(device_state_history::class, 'from_state_id');
    }

    public function toStateHistories()
    {
        return $this->hasMany(device_state_history::class, 'to_state_id');
    }
}
