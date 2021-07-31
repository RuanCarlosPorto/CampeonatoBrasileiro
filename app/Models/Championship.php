<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Championship extends Model
{
    use HasFactory;

    protected $fillable = [
        'points',
        'games',
        'victories',
        'draws',
        'loses',
        'goals_pro',
        'goals_against',
        'goals_dif',
    ];

    protected $with = [
        'team'
    ];

    public function byTeamId($teamId) : ?Championship
    {
        return $this->whereTeamId($teamId)->first();
    }

    public function getAssortedTable() {
        $order = collect([
            'points' => 'DESC',
            'victories' => 'DESC',
            'goals_dif' => 'DESC',
        ]);

        $model = $this->newQuery();

        $order->map(function($order, $item) use ($model) {
            $model->orderBy($item, $order);
        });

        return $model->get();
    }

    public function team() : BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
