<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:35:33
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\types;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\Chat;
use ustadev\telegram\traits\User;
use ustadev\telegram\traits\Message;

class CallbackQuery extends Objects
{
    use Chat,User, Message;
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getData()
    {
        return $this->getValue('data');
    }
}