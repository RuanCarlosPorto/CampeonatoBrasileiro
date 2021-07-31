<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamsId = DB::table('teams')->get('id');

        $seed = $teamsId->map(function($team) {
            return [
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'team_id' => $team->id,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ];
        });

        DB::table('championships')->insert($seed->toArray());
    }
}
