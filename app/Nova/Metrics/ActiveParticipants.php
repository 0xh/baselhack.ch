<?php

namespace App\Nova\Metrics;

use App\Domain\Models\Participant;
use Illuminate\Http\Request;
use Laravel\Nova\Metrics\Value;

class ActiveParticipants extends Value
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function calculate(Request $request)
    {
        return $this->result(Participant::all()->count());
    }



    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'count-active-participants';
    }
}
