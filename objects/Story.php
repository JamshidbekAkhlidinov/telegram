<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:31:1
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Story extends Objects
{
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getChat()
    {
        return new Chat($this->getValue('chat'));
    }
}