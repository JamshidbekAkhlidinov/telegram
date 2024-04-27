<?php
/*
 *  Jamshidbek Akhlidinov
 *   27 - 4 2024 15:19:5
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\FileAttributes;

class Sticker extends Objects
{
    use FileAttributes;

    public function getWidth()
    {
        return $this->getValue('width');
    }

    public function getHeight()
    {
        return $this->getValue('height');
    }


    public function getType()
    {
        return $this->getValue('type');
    }


    public function getIsAnimated()
    {
        return $this->getValue('is_animated');
    }


    public function getIsVideo()
    {
        return $this->getValue('is_video');
    }

    public function getEmoji()
    {
        return $this->getValue('emoji');
    }

    public function getSetName()
    {
        return $this->getValue('set_name');
    }

    public function getCustomEmojiId()
    {
        return $this->getValue('custom_emoji_id');
    }


}