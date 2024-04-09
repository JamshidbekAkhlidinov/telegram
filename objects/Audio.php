<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:23:29
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\FileAttributes;

class Audio extends Objects
{
    use FileAttributes;

    public function getDuration()
    {
        return $this->getValue('duration');
    }

    public function getPerformer()
    {
        return $this->getValue('performer');
    }

    public function getTitle()
    {
        return $this->getValue('title');
    }
}