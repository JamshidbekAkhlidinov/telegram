<?php
/*
 *  Jamshidbek Akhlidinov
 *   20 - 4 2024 19:34:50
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait ChannelPost
{
    public function isChannelPost()
    {
        return isset($this->update['channel_post']);
    }

    public function getChannelPost()
    {
        return new \ustadev\telegram\types\ChannelPost($this->update['channel_post']);
    }
}