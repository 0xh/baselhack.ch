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

        \App\Domain\Models\User::create([
            'name' => 'Stan Barrows',
            'email' => 'stan.barrows@onicial.ch',
            'password' => bcrypt('normal'),
            'notifications' => null
        ]);


        \App\Domain\Models\User::create([
            'name' => 'Jonas Jatsch',
            'email' => 'jonas.jatsch@baloise.com',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);

        \App\Domain\Models\User::create([
            'name' => 'Jutta Jerlich',
            'email' => 'jutta.jerlich@gmail.com',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);

        \App\Domain\Models\User::create([
            'name' => 'Matthias Cullmann',
            'email' => 'matthias.cullmann@baloise.ch',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);


        \App\Domain\Models\User::create([
            'name' => 'Vivienne Mayer',
            'email' => 'vivienne.mayer@bs.ch',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);

        \App\Domain\Models\User::create([
            'name' => 'Dario Todaro',
            'email' => 'dario.todaro@bluesky-it.ch',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);

        \App\Domain\Models\User::create([
            'name' => 'Oliver Fritsch',
            'email' => ' oliver_fritsch@yahoo.de',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);


        \App\Domain\Models\User::create([
            'name' => 'Marina Morawietz',
            'email' => ' marina.morawietz@fhnw.ch',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);

        \App\Domain\Models\User::create([
            'name' => 'Thomas Brenzikofer',
            'email' => ' thomas.brenzikofer@baselarea.swiss',
            'password' => bcrypt('Baselhack2018$$'),
            'notifications' => null
        ]);






    }
}
