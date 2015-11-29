<?php
use Illuminate\Database\Seeder;

class CVsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::retrieveUsers();
        foreach($users as $user)
        {
            factory(App\CV::class)->create(['user_id' => $user->id]);
        }
    }
}
