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
        'id_card',
        'birth_date',
        'mobile_no',
        'address',
        'social_id',
        'emergency_contact_name',
        'emergency_contact_mobile',
        'emergency_contact_relation',
        'congenital_disease',
        'profile_path',
        'status',
    ];

    public function attention(): HasMany
    {
        return $this->hasMany(Attention::class);
    }
}
