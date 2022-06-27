<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comic extends Model
{
    //

    protected $fillable = ['title', 'description', 'price', 'serie_id', 'thumb', 'sale_date', 'type'];

    /**
     * Get the serie that owns the Comic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }
}
