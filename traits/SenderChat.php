<?php
/*
 *  Jamshidbek Akhlidinov
 *   20 - 4 2024 20:40:14
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait SenderChat
{
    public function isSenderChat()
    {
        return isset($this->update['sender_chat']);
    }

    public function getSenderChat()
    {
        return new \ustadev\telegram\objects\SenderChat($this->update['sender_chat']);
    }
}