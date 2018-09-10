<?php

namespace App\Domain\Models;

use App\App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Participant extends Model
{
    use Notifiable, SoftDeletes, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'firstname', 'lastname', 'company', 'email', 'confirmed_email', 'over_eighteen', 'accepted_policy',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'accepted_policy',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
