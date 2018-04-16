<?php

namespace App\Domain\Association\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'
    ];


}
