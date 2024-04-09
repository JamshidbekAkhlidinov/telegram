<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:1:3
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Dice
{
    public function isDice()
    {
        return isset($this->update['dice']);
    }

    public function getDice()
    {
        return new \ustadev\telegram\objects\Dice($this->update['dice']);
    }
}