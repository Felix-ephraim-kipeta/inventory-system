<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceFactory> */
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(device_state::class);
    }

    public function assignments()
    {
        return $this->hasMany(assignments::class);
    }

    public function stateHistories()
    {
        return $this->hasMany(device_state_history::class);
    }

    public function archives()
    {
        return $this->hasMany(device_archive::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
