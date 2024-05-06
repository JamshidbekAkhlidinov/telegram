<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:0:52
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Contact
{
    public function isContact()
    {
        return isset($this->update['contact']);
    }

    public function getContact()
    {
        return new \ustadev\telegram\objects\Contact($this->update['contact']);
    }
}