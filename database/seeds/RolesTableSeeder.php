<?php

use Illuminate\Database\Seeder;
use Smart6ate\Roles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

            [
                'title' => 'administrator',
            ],

            [
                'title' => 'member',
            ],

            [
                'title' => 'events',
            ],

        ];

        Role::insert($roles);
    }
}
