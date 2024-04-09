<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:34:40
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\FileAttributes;

class VideoNote extends Objects
{
    use FileAttributes;

    public function getLength()
    {
        return $this->getValue('length');
    }

    public function getDuration()
    {
        return $this->getValue('duration');
    }
}