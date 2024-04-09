<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:2:6
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait PhotoSize
{
    public function isPhotoSize()
    {
        return isset($this->update['thumbnail']);
    }

    public function getPhotoSize()
    {
        return new \ustadev\telegram\objects\PhotoSize($this->update['thumbnail']);
    }
}