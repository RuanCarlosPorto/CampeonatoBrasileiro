<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['name' => 'Palmeiras', 'image' => 'Palmeiras.svg'],
            ['name' => 'Atlético-MG', 'image' => 'atletico-mg.svg'],
            ['name' => 'Fortaleza', 'image' => 'fortaleza.svg'],
            ['name' => 'Bragantino', 'image' => 'bragantino.svg'],
            ['name' => 'Atlético-PR', 'image' => 'Athletico-PR.svg'],
            ['name' => 'Flamengo', 'image' => 'Flamengo-2018.svg'],
            ['name' => 'Ceará', 'image' => 'ceara.svg'],
            ['name' => 'Atlético-GO', 'image' => 'atletico-go-2020.svg'],
            ['name' => 'Bahia', 'image' => 'bahia.svg'],
            ['name' => 'Corinthians', 'image' => 'Corinthians.svg'],
            ['name' => 'Fluminense', 'image' => 'fluminense.svg'],
            ['name' => 'Santos', 'image' => 'santos.svg'],
            ['name' => 'Juventude', 'image' => 'Juventude-2021-01.svg'],
            ['name' => 'Internacional', 'image' => 'internacional.svg'],
            ['name' => 'Cuiabá', 'image' => 'Cuiaba_EC.svg'],
            ['name' => 'Sport Recife', 'image' => 'sport.svg'],
            ['name' => 'São Paulo', 'image' => 'sao-paulo.svg'],
            ['name' => 'América-MG', 'image' => 'America-MG.svg'],
            ['name' => 'Grêmio', 'image' => 'gremio.svg'],
            ['name' => 'Chapecoense', 'image' => 'CHAPECOENSE-2018.svg'],
        ];

        $seed = array_map(function($team) {
            $team['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
            $team['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

            return $team;
        }, $teams);

        DB::table('teams')->insert($seed);
    }
}
