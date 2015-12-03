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
                $section = factory(App\Section::class)->make();
                // The section belongs to a user. So associate it.
                $section->user()->associate($section);

                // The section may belong to MANY CVs.
                // Attach this section to cv.
                $cv->sections()->attach($section);
                // Attach the cv to this section aswell.
                $section->cvs()->attach($cv);

                // Save the section.
                $user->sections()->save($section);

                //factory(App\Section::class)->create(['user_id' => $user->id, 'cv_id' => $cv->id]);
            }
        }
    }
}
