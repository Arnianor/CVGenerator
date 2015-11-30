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
        $users = \App\User::all();
        foreach ($users as $user)
        {
            $cvs = $user->cvs()->get();
            foreach ($cvs as $cv)
            {
                //$section = factory(App\Section::class)->make();
                //$cv->sections()->save($section);
                //$user->sections()->save($section);

                factory(App\Section::class)->create(['user_id' => $user->id, 'cv_id' => $cv->id]);
            }
        }
    }
}
