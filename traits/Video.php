<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:3:37
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Video
{
    public function isVideo()
    {
        return isset($this->update['video']);
    }

    public function getVideo()
    {
        return new \ustadev\telegram\objects\Video($this->update['video']);
    }
}