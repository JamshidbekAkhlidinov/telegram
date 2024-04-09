<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:1:57
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait MessageEntity
{
    public function isMessageEntity()
    {
        return isset($this->update['caption_entities']);
    }

    public function getMessageEntity()
    {
        return new \ustadev\telegram\objects\MessageEntity($this->update['caption_entities']);
    }
}