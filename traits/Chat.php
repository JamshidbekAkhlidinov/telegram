<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:28:7
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Chat
{
    public function isChat()
    {
        return isset($this->update['chat']);
    }

    public function getChat()
    {
        return new \ustadev\telegram\objects\Chat($this->update['chat']);
    }
}