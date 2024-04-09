<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:2:55
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Story
{
    public function isStory()
    {
        return isset($this->update['story']);
    }

    public function getStory()
    {
        return new \ustadev\telegram\objects\Story($this->update['story']);
    }
}