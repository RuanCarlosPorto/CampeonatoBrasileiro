<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    public function championships() : HasMany
    {
        return $this->hasMany(Championship::class, 'team_id');
    }

    public function homeMatches() : HasMany
    {
        return $this->hasMany(Matche::class, 'team_one_id');
    }

    public function outHomeMatches() : HasMany
    {
        return $this->hasMany(Matche::class, 'team_two_id');
    }
}
