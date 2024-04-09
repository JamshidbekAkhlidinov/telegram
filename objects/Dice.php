<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:44:35
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Dice extends Objects
{
    public function getEmoji()
    {
        return $this->getValue('emoji');
    }

    public function getVal()
    {
        return $this->getValue('value');
    }
}