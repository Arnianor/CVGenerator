<?php
namespace App\Seeders;

use Faker\Provider\Address;
use Faker\Provider\DateTime;
use Faker\Provider\Miscellaneous;
use Faker\Provider\PhoneNumber;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        // Seed with a database querry.
        DB::table('users')->insert([
            'name' => str_random(10),
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

        /*
        //Seed with a factory.
        factory(App\User::class,5)->create()->each(function($u){
            $u->posts()->save(factory(App\Post::class)->make());
        });
        */
    }
}
