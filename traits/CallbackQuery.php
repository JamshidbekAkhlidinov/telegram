<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:24:25
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait CallbackQuery
{
    public function isCallbackQuery()
    {
        return isset($this->update['callback_query']);
    }

    public function getCallbackQuery()
    {
        return new \ustadev\telegram\types\CallbackQuery($this->update['callback_query']);
    }
}