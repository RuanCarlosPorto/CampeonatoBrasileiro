<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matche extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_one_id',
        'team_two_id',
        'score_team_one',
        'score_team_two',
    ];

    public function homeTeam() : BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_one_id');
    }

    public function outHomeTeam() : BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_two_id');
    }
}
