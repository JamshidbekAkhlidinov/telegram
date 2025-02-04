<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:3:37
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Photo
{
    public function isPhoto()
    {
        return isset($this->update['photo']);
    }

    public function getPhoto()
    {
        return new \ustadev\telegram\objects\Photo($this->update['photo']);
    }
}