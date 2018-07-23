<?php

namespace App\Domain\Event\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Event\Models\Subscriber as SpatieNewsletter;

class Subscriber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'subscribed_since',
    ];

    public function getRouteKeyName()
    {
        return 'email';
    }

    public function subscribe()
    {
        SpatieNewsletter::subscribe($this->email);
    }

    public function unsubscribe()
    {
        SpatieNewsletter::unsubscribe($this->email);
    }
}
