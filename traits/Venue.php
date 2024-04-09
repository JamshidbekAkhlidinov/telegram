<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:3:24
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Venue
{
    public function isVenue()
    {
        return isset($this->update['venue']);
    }

    public function getVenue()
    {
        return new \ustadev\telegram\objects\Venue($this->update['venue']);
    }
}