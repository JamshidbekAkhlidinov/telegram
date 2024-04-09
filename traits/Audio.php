<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:0:36
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Audio
{
    public function isAudio()
    {
        return isset($this->update['audio']);
    }

    public function getAudio()
    {
        return new \ustadev\telegram\objects\Audio($this->update['audio']);
    }
}