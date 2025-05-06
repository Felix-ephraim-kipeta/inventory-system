<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class role_user extends Pivot
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class); // Pivot: role_user
    }
}
