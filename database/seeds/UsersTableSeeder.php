<?php

use Illuminate\Database\Seeder;

use Smart6ate\Roles\Models\Role;

use Carbon\Carbon;
use App\User;

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
                'name'       => 'Sebastian Fix',
                'email'      => 'sebastian.fix@baselhack.ch',
                'password'   => bcrypt('UqikZmp928nk7eL&'),
                'redirect_email'   => 'sebastian.fix@smartgate.ch',
                'github'   => 'StanBarrows',
                'status'   => 'Active',
                'created_at' => $now,
                'updated_at' => $now
            ],

        ];

        User::insert($users);

        $roles = Role::all();

        $members = User::all();

        foreach ($members as $member)
        {
            foreach ($roles as $role)
            {
                $member->roles()->attach($role);
            }
        }
    }
}
