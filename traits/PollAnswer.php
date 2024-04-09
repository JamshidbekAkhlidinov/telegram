<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:2:32
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait PollAnswer
{
    public function isPollAnswer()
    {
        return isset($this->update['poll_answer']);
    }

    public function getPollAnswer()
    {
        return new \ustadev\telegram\objects\PollAnswer($this->update['poll_answer']);
    }
}