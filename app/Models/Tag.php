<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['tag_name'];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'tags_id');
    }
}
