<?php

namespace App\Domain\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
   use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'uuid','company', 'firstname','lastname','email','tag'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


}
