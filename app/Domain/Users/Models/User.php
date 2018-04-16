<?php

namespace App\Domain\Users\Models;

use App\App\Traits\UsersTrait;
use Smart6ate\Roles\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles, UsersTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'name', 'email', 'password', 'redirect_email', 'mobile', 'github', 'birthday', 'member_since', 'last_authentication',
    ];

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at',
        'member_since',
        'last_authentication',

        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'email';
    }

    public function getGitHubLinkAttribute()
    {
        if ($this->github) {
            return 'https://github.com/'.$this->github;
        }
    }

    public function getBaselHackEmailAttribute()
    {
        $name = $this->name;
        $domain = '@baselhack.ch';

        list($firstname, $lastname) = explode(' ', $name);

        $email = strtolower($firstname.'.'.$lastname.$domain);

        return $email;
    }

    public function getAvatar()
    {
        if (empty($this->avatar)) {
            return 'https://www.gravatar.com/avatar/'.md5($this->email).'x?s=500&d=mm';
        }

        return $this->avatar;
    }

    public function isSameAs(self $user)
    {
        return $this->id === $user->id;
    }
}
