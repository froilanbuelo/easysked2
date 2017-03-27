<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->appointments()->save(factory(App\Appointment::class)->make());
        });
        //$this->call(AppointmentSeeder::class);
    }
}
