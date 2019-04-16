<?php

use App\Model\User;
use App\Model\Contact;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ContactTableSeeder::class);

        factory(User::class, 1)->states('test')->create()->each(function ($user) {
            $user->contacts()->saveMany(factory(Contact::class, 10)->make());
        });
        factory(User::class, 3)->create()->each(function ($user) {
            $user->contacts()->saveMany(factory(Contact::class, 10)->make());
        });
    }
}
