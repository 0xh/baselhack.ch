<?php

namespace App\Domain\Association\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status', 'firstname', 'lastname', 'email', 'mobile', 'github', 'birthdate', 'member_since',
    ];

    public function getNameAttribute()
    {
        return $this->firstname.' '.$this->lastname;
    }
}
