<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Maatwebsite\Excel\Concerns\Exportable;
use Smart6ate\Roles\Traits\HasRoles;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status','name', 'email', 'password','redirect_email','mobile','github','birthday','member_since','last_activity',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'member_since',
        'last_activity'
    ];


    public function getGitHubLinkAttribute()
    {
        $github = auth()->user()->github;

        return 'https://github.com/' . $github;
    }

    public function getBaselHackEmailAttribute()
    {
        $name = auth()->user()->name;
        $domain = '@baselhack.ch';

        list($firstname, $lastname) = explode(' ', $name);

        $email = strtolower($firstname . '.' . $lastname .  $domain);

        return $email;
    }
}
