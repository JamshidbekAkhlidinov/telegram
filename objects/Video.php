<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:33:14
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\FileAttributes;

class Video extends Objects
{
    use FileAttributes;

    public function getWidth()
    {
        return $this->getValue('width');
    }

    public function getHeight()
    {
        return $this->getValue('height');
    }

    public function getDuration()
    {
        return $this->getValue('duration');
    }
}