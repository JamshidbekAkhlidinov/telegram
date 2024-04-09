<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:3:57
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Voice
{
    public function isVoice()
    {
        return isset($this->update['voice']);
    }

    public function getVoice()
    {
        return new \ustadev\telegram\objects\Voice($this->update['voice']);
    }
}