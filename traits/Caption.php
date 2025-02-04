<?php
/*
 *  Jamshidbek Akhlidinov
 *   22 - 4 2024 17:54:50
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Caption
{
    public function isCaption()
    {
        return isset($this->update['caption']);
    }

    public function getCaption()
    {
        return $this->update['caption'];
    }
}