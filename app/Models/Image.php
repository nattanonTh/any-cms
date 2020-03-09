<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    public $timestamps = false;

    protected $table = 'images';

    protected $fillable = ['type', 'name', 'size', 'path', 'thumb_path', 'tags_id'];

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'tags_id', 'id');
    }

    public function getMbyteSize(string $type = '')
    {
        if (empty($type)) {
            // sum totoal size without scope type
            return number_format((static::all()->sum('size') / 1000000), 2);
        } else {
            // sum totoal size with scope type
            return number_format((static::all()->where('type', $type)->sum('size') / 1000000), 2);
        }
    }

    public function getByteSize(string $type = '')
    {
        if (empty($type)) {
            // sum totoal size without scope type
            return number_format((static::all()->sum('size')), 0);
        } else {
            // sum totoal size with scope type
            return number_format((static::all()->where('type', $type)->sum('size')), 0);
        }
    }

    public function getAllFileType()
    {
        return static::all()->groupBy('type');
    }

    public function getCountWithType(string $type)
    {
        return static::all()->where('type', $type)->count();
    }

    public function getFullPath()
    {

    }
}
