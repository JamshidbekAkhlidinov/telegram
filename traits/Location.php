<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:1:45
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Location
{
    public function isLocation()
    {
        return isset($this->update['location']);
    }

    public function getLocation()
    {
        return new \ustadev\telegram\objects\Location($this->update['location']);
    }
}