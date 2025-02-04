<?php
/*
 *  Jamshidbek Akhlidinov
 *   20 - 4 2024 20:40:41
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class SenderChat extends Objects
{
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getTitle()
    {
        return $this->getValue('title');
    }

    public function getUsername()
    {
        return $this->getValue('username');
    }

    public function getType()
    {
        return $this->getValue('type');
    }
}