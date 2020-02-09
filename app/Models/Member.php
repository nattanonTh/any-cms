<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    public $fillable = [
        'name',
        'surname',
        'age',
        'sex',
        'id_card',
        'birth_date',
        'mobile_no',
        'address',
        'social_id',
        'emergency_contact_name',
        'emergency_contact_mobile',
        'emergency_contact_relation',
        'congenital_disease',
        'status',
        'image',
    ];

    protected $casts = [
        'birth_date' => 'datetime',
    ];

    public function attention(): HasMany
    {
        return $this->hasMany(Attention::class);
    }
}
