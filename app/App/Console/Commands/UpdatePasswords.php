<?php

namespace App\App\Console\Commands;

use App\Domain\Users\Models\User;
use App\Models\Company;
use Illuminate\Console\Command;
use Smart6ate\Roles\Models\Role;

class UpdatePasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update passwords';

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
        $activated_user = User::where('activated','=',false)->get();

        foreach($activated_user as $user)
        {
            $user->password = bcrypt(base64_encode(random_bytes(10)));
            $user->save();
        }

    }
}
