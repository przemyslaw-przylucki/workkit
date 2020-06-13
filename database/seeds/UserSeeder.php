<?php

use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(Team::class)->create([
           'name' => 'CodeTisans'
        ]);

        $user = factory(User::class)->create([
            'name' => 'Przemek',
            'last_name' => 'Przyłucki',
            'team_id' => $team->id,
            'email' => 'test@example.com'
        ]);
    }
}
