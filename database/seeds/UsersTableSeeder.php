<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domain\Models\User::create([
            'name' => 'info@baselhack.ch',
            'email' => 'info@baselhack.ch',
            'password' => bcrypt(str_random(16)),
            'notifications' => array('general'),
        ]);

        \App\Domain\Models\User::create([
            'name' => 'event@baselhack.ch',
            'email' => 'event@baselhack.ch',
            'password' => bcrypt(str_random(16)),
            'notifications' => array('event'),
        ]);

        \App\Domain\Models\User::create([
            'name' => 'sponsoring@baselhack.ch',
            'email' => 'sponsoring@baselhack.ch',
            'password' => bcrypt(str_random(16)),
            'notifications' => array('sponsoring'),
        ]);
    }
}
