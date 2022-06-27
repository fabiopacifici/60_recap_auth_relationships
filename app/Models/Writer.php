<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Writer extends Model
{
    //


    /**
     * The comics that belong to the Writer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics(): BelongsToMany
    {
        return $this->belongsToMany(Comic::class);
    }
}
