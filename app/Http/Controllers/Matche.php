<?php

namespace App\Http\Controllers;

use App\Models\Matche as ModelsMatche;
use App\Models\Team;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as Response;

class Matche extends Controller
{
    protected ModelsMatche $matche;
    protected Team $team;

    public function __construct(ModelsMatche $matche, Team $team)
    {
        $this->matche = $matche;
        $this->team = $team;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'team_one_id' => 'required',
            'team_two_id' => 'required',
            'score_team_one' => ['required', 'integer'],
            'score_team_two' => ['required', 'integer'],
        ]); 

        $condition = $validated
            && $this->team->find($request->team_one_id)
            && $this->team->find($request->team_two_id);

        if (!$condition) {
            return response()->json(null, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $this->matche->fill($request->toArray())->save();

        app(Championship::class)->matchReflect(
            $request->team_one_id,
            $request->team_two_id,
            $request->score_team_one,
            $request->score_team_two,
        );

        return response()->json(null, Response::HTTP_OK);
    }
}
