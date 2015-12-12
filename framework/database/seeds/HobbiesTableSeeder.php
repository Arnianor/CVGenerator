<?php
use Illuminate\Database\Seeder;

class HobbiesTableSeeder extends Seeder
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
            $cvs = $user->retrieveCVs();
            foreach($cvs as $cv)
            {
                $sections = $cv->getSections();
                foreach($sections as $section)
                {
                    factory(App\Hobby::class)->create(['user_id' => $user->id, 'section_id' => $section->id]);
                }
            }
        }
    }
}
