<?php

namespace App\App\Traits;

trait UsersTrait
{
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeByCustomerId($query, $customer_id)
    {
        return $query->where('customer_id', '=', $customer_id)->first();
    }

    public function scopeByEmail($query, $email)
    {
        return $query->where('email', '=', $email)->first();
    }
}
