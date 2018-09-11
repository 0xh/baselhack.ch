<?php

namespace App\Domain\Models;

use App\App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
    use SoftDeletes, HasUuid;

    protected $fillable = [
        'uuid', 'name',  'image', 'url',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
