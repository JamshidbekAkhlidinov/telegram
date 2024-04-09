<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:51:18
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Location extends Objects
{
    public function getLatitude()
    {
        return $this->getValue('latitude');
    }

    public function getLongitude()
    {
        return $this->getValue('longitude');
    }

    public function getHorizontalAccuracy()
    {
        return $this->getValue('horizontal_accuracy');
    }

    public function getLivePeriod()
    {
        return $this->getValue('live_period');
    }

    public function getHeading()
    {
        return $this->getValue('heading');
    }

    public function getProximityAlertRadius()
    {
        return $this->getValue('proximity_alert_radius');
    }
}