<?php

namespace App\Domain\Event\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];

    public function getRouteKeyName()
    {
        return 'email';
    }
}
