<?php
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
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
            $cvs = $user->cvs()->get();
            foreach($cvs as $cv)
            {
                $sections = $cv->sections()->get();
                foreach($sections as $section)
                {

                    //$skill = factory(App\Skill::class)->make();
                    //$user->skills()->save($skill);
                    //$section->skill()->save($skill);

                    factory(App\Skill::class)->create(['user_id' => $user->id, 'section_id' => $section->id]);
                }
            }
        }
    }
}
