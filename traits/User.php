<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:49:1
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait User
{
    public function isUser()
    {
        return isset($this->update['from']);
    }

    public function getUser()
    {
        return new \ustadev\telegram\objects\User($this->update['from']);
    }
}