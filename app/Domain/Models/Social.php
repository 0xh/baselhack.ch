<?php

namespace App\Domain\Models;

use App\App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social extends Model
{
    use SoftDeletes, HasUuid;

    protected $fillable = [
        'uuid', 'name',  'icon', 'url',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
