<?php

namespace App\App\Console\Commands;

use App\Domain\Users\Models\User;
use App\Models\Company;
use Illuminate\Console\Command;
use Smart6ate\Roles\Models\Role;

class UpdateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update roles';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $active_users = User::where('member_status','=','active')->get();

        $role = Role::where('title','=','member')->first();

        foreach($active_users as $user)
        {
            $user->roles()->detach($role);
            $user->roles()->attach($role);
        }

        $passive_users = User::where('member_status','!=','active')->get();


        foreach($passive_users as $user)
        {
            $user->roles()->detach($role);
        }


        $inactive_users = User::where('activated','=',false)->get();

        foreach($inactive_users as $user)
        {
            $user->roles()->detach($role);
        }


        $trashed_users = User::onlyTrashed()->get();

        foreach($trashed_users as $user)
        {
            $user->roles()->detach();
        }

    }
}
