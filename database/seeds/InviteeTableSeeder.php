<?php

use Illuminate\Database\Seeder;

class InviteeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Invitee::class, 50)->create();
    }
}
