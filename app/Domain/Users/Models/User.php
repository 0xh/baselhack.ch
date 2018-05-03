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

    protected $fillable = [
         'name', 'email', 'password', 'published_at', 'last_authentication',
    ];

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at',
        'published_at',
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
