<?php
use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = Faker\Factory::create();
        //factory(App\Template::class,5)->make();

        $users = \App\User::all();
        foreach($users as $user)
        {
            $template = factory(App\Template::class)->make();
            $user->templates()->save($template);
        }

    }
}
