<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:16:47
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Text
{
    public function isText()
    {
        return isset($this->update['text']);
    }

    public function getText()
    {
        return $this->update['text'];
    }
}