<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:35:23
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\types;


use ustadev\telegram\Objects;
use ustadev\telegram\traits\User;

class InlineQuery extends Objects
{
    use User;

    public function getId()
    {
        return $this->getValue('id');
    }

    public function getQuery()
    {
        return $this->getValue('query');
    }

    public function getChatType()
    {
        return $this->getValue('chat_type');
    }
}