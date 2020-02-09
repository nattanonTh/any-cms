<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attention extends Model
{
    use SoftDeletes;

    protected $table = 'attention';

    protected $fillable = [
        'event_id',
        'member_id',
        'attend_date',
        'attend_start',
        'attend_end',
    ];

    protected $casts = [
        'attend_start' => 'date',
        'attend_end' => 'date',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
