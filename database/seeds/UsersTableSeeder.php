<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Smart6ate\Roles\Models\Role;
use App\Domain\Users\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $users = [
            [
                'name' => 'Sebastian Fix',
                'email' => 'sebastian.fix@smartgate.ch',
                'password' => bcrypt('UqikZmp928nk7eL&'),
                'created_at' => $now,
                'updated_at' => $now,
                'published_at' => $now,
            ],

            [
                'name' => 'Matthias Cullmann',
                'email' => 'matthias.cullmann@baloise.ch',
                'password' => bcrypt('baselhack2018$$'),
                'created_at' => $now,
                'updated_at' => $now,
                'published_at' => $now,

            ],

        ];

        User::insert($users);

        $roles = Role::all();

        $members = User::all();

        foreach ($members as $member) {
            foreach ($roles as $role) {
                $member->roles()->attach($role);
            }
        }
    }
}
