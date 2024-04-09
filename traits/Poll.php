<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:2:23
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Poll
{
    public function isPoll()
    {
        return isset($this->update['poll']);
    }

    public function getPoll()
    {
        return new \ustadev\telegram\objects\Poll($this->update['poll']);
    }
}