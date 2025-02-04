<?php
/*
 *  Jamshidbek Akhlidinov
 *   20 - 4 2024 19:34:50
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait EditedChannelPost
{
    public function isEditedChannelPost()
    {
        return isset($this->update['edited_channel_post']);
    }

    public function getEditedChannelPost()
    {
        return new \ustadev\telegram\types\EditedChannelPost($this->update['edited_channel_post']);
    }
}