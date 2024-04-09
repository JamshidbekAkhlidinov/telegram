<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:3:9
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Message
{
    public function isMessage()
    {
        return isset($this->update['message']);
    }

    public function getMessage()
    {
        return new \ustadev\telegram\types\Message($this->update['message']);
    }
}