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
                'title'      => 'developer',
            ],

            [
                'title'      => 'administrator',
            ],

            [
                'title'      => 'moderator',
            ],

            [
                'title'      => 'member',
            ],

        ];

        Role::insert($roles);


    }
}
