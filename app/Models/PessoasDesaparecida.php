<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoasDesaparecida extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'eyeColor',
        'skinColor',
        'gender',
        'desappearingCity',
        'state',
        'weight',
        'birthDate',
        'desappearingDate',
        'currentAge',
        'age',
        'status',
        'fatherName',
        'motherName',
        'height',
        'otherFeatures',
        'circumstances',
        'motivations',
        'policeStationPhoneNumber',
        'familyOrFriendsPhoneNumber',
        'email',
    ];
}
