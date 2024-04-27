<?php
/*
 *  Jamshidbek Akhlidinov
 *   27 - 4 2024 15:22:50
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Sticker
{
    public function isSticker()
    {
        return isset($this->update['sticker']);
    }

    public function getSticker()
    {
        return new \ustadev\telegram\objects\Sticker($this->update['sticker']);
    }
}