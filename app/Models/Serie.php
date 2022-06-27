<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
    //
    protected $fillable = ['name', 'slug'];

    /**
     * Get all of the comics for the Serie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics(): HasMany
    {
        return $this->hasMany(Comic::class);
    }
}
