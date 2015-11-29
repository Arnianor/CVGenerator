<?php

use Faker\Provider\Address;
use Faker\Provider\DateTime;
use Faker\Provider\Miscellaneous;
use Faker\Provider\Person;
use Faker\Provider\PhoneNumber;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    protected $delimiter = ' ';
    protected $address_delimiter = ';';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        // Seed with a database querry.
        DB::table('users')->insert([
            'name' => Person::firstNameMale(),
            'email' => str_random(10) . '@' . str_random(5) . '.com',
            'password' => bcrypt('secret'),
            'date_birth' => DateTime::unixTime(),
            'telephone' => PhoneNumber::phoneNumber(),
            'address' => Address::streetSuffix() . $this->delimiter . Address::buildingNumber() . $this->address_delimiter .
                Address::postcode() . $this->delimiter . Address::citySuffix() . $this->address_delimiter .
                Address::country(),
            'nationality' => Miscellaneous::countryCode(),
            'work_permit' => str_random(1),
            'driver_permit' => 'yes',
        ]);
        */

        //Seeding with a factory.
        // No relationships are made.
        factory(App\User::class,5)->create();
        /*
        // Seed and attach relationships to each user;
        factory(App\User::class,5)->create()->each(function($u){
            $u->templates()->save(factory(App\Template::class)->make());
            // Cannot continue as the foreign key integrities are not respected afterwards.
            $u->cvs()->save(factory(App\CV::class)->make());
            $u->sections()->save(factory(App\Section::class)->make());
            $u->skills()->save(factory(App\Skill::class)->make());
            $u->hobbies()->save(factory(App\Hobby::class)->make());
            $u->jobs()->save(factory(App\Work::class)->make());
            $u->languages()->save(factory(App\Language::class)->make());
            $u->educations()->save(factory(App\Education::class)->make());
        });
        */
    }
}
