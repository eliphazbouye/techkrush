<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get the roles associated with the permission.
     *
     * @return HasMany
     */
    public function roles(): HasMany
    {
        return $this->belongsToMany(Role::class);
    }
}
