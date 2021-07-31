<?php

namespace App\Http\Controllers;

use App\Models\Championship as ModelsChampionship;
use Illuminate\Http\Request;

class Championship extends Controller
{
    protected ModelsChampionship $championship;

    public function __construct(ModelsChampionship $championship)
    {
        $this->championship = $championship;
    }

    public function index() {
        return $this->championship->getAssortedTable();
    }

    public function matchReflect($teamOneId, $teamTwoId, $goalsTeamOne, $goalsTeamTwo) 
    {
        $this->teamReflect($teamOneId, $goalsTeamOne, $goalsTeamTwo);
        $this->teamReflect($teamTwoId, $goalsTeamTwo, $goalsTeamOne);
    }

    public function teamReflect($teamId, $goalsPro, $goalsAgainst)
    {
        $team = $this->championship->byTeamId($teamId);
        $team->games++;
        $team->goals_pro += $goalsPro;
        $team->goals_against += $goalsAgainst;
        $team->goals_dif += $team->goals_pro - $team->goals_against;
        $team->victories += $goalsPro > $goalsAgainst ? 1 : 0;
        $team->loses += $goalsPro >= $goalsAgainst ? 0 : 1;
        $team->draws += $goalsPro === $goalsAgainst ? 1 : 0;

        $team->points += $goalsPro === $goalsAgainst
            ? 1 : 
            ($goalsPro > $goalsAgainst ? 3 : 0);

        $team->save();
    }
}
