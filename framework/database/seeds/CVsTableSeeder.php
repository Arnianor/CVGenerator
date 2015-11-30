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
        $users = \App\User::all();
        foreach($users as $user)
        {
            $cv = factory(App\Cv::class)->make();
            $user->cvs()->save($cv);
        }
    }
}
