<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:53:14
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class WebAppData extends Objects
{
    public function getData()
    {
        return $this->getValue('data');
    }

    public function getButtonText()
    {
        return $this->getValue('button_text');
    }
}