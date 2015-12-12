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

        $this->call(UserTableSeeder::class);
        $this->call(TemplatesTableSeeder::class);
        $this->call(CVsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(EducationsTableSeeder::class);

        Model::reguard();
    }
}
