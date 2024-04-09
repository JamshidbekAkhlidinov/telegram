<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:46:17
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class PollAnswer extends Objects
{
    public function getPollId()
    {
        return $this->getValue('poll_id');
    }

    public function getVoterChat()
    {
        return new Chat($this->getValue('voter_chat'));
    }

    public function getUser()
    {
        return new User($this->getValue('user'));
    }

    public function getOptionIds()
    {
        return $this->getValue('option_ids');
    }

}