<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:45:59
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class PollOption extends Objects
{
    public function getText()
    {
        return $this->getValue('text');
    }

    public function getVoterCount()
    {
        return $this->getValue('voter_count');
    }
}