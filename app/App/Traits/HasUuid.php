<?php

namespace App\App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasUuid
{
    public static function bootHasUuid()
    {
        self::creating(function ($model) {
            $model->uuid = base_convert(microtime(false), 10, 36);
        });
    }

    public function scopeFindByUuid(Builder $builder, $uuid)
    {
        return $builder->withTrashed()->where('uuid', '=', $uuid)->firstOrFail();
    }
}
