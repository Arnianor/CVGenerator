<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Seed some random users.
        $this->call(UserTableSeeder::class);
        // Seed some random templates
        $this->call(TemplatesTableSeeder::class);
        // Seed the user's cvs.
        $this->call(CVsTableSeeder::class);
        /*
        // Stop seeding as it is not fully functional.
        $this->call(SectionsTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        */
        Model::reguard();
    }
}
