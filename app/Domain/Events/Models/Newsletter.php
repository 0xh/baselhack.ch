<?php

namespace App\Domain\Events\Models;

use Newsletter as SpatieNewsletter;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','subscribed_since'
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
