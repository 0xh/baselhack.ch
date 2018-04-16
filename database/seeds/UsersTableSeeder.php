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
                'activated' => true,
                'email' => 'sebastian.fix@baselhack.ch',
                'password' => bcrypt('UqikZmp928nk7eL&'),
                'redirect_email' => 'sebastian.fix@smartgate.ch',
                'github' => 'StanBarrows',
                'member_status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'name' => 'Matthias Cullmann',
                'activated' => true,
                'email' => 'matthias.cullmann@baselhack.ch',
                'password' => bcrypt('baselhack2018$$'),
                'redirect_email' => 'matthias.cullmann@baloise.ch',
                'github' => 'culmat',
                'member_status' => 'active',
                'created_at' => $now,
                'updated_at' => $now,
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
