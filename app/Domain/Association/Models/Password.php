<?php

namespace App\Domain\Association\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Password extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'service', 'email', 'username', 'password', 'description',
    ];
}
