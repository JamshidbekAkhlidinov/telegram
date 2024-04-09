<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:2:44
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait PollOption
{
    public function isOptions()
    {
        return isset($this->update['options']);
    }

    public function getOptions()
    {
        return new \ustadev\telegram\objects\PollOption($this->update['options']);
    }
}