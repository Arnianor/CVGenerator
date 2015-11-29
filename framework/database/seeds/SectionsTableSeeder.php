<?php
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
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
            $cvs = $user->retrieveCVs();
            foreach($cvs as $cv)
            {
                factory(App\Section::class)->create(['user_id' => $user->id, 'cv_id' => $cv->id]);
            }
        }
    }
}
