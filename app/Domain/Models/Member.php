<?php

namespace App\Domain\Models;

use App\App\Traits\HasUuid;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable, SoftDeletes, HasUuid;

    protected $fillable = [
         'uuid', 'name',  'email', 'password', 'published_at', 'last_authenticated',
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
        return 'uuid';
    }
}
