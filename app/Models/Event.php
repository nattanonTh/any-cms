<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'event_name',
        'event_schedule',
    ];

    public function attention(): hasMany
    {
        return $this->hasMany(Attention::class);
    }
}
