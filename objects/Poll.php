<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:47:49
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Poll extends Objects
{
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getQuestion()
    {
        return $this->getValue('question');
    }

    public function getOptions()
    {
        return new PollOption($this->getValue('options'));
    }

    public function getTotalVoterCount()
    {
        return $this->getValue('total_voter_count');
    }

    public function isClosed()
    {
        return $this->getValue('is_closed');
    }

    public function isAnonymous()
    {
        return $this->getValue('is_anonymous');
    }

    public function getType()
    {
        return $this->getValue('type');
    }

    public function allowsMultipleAnswers()
    {
        return $this->getValue('allows_multiple_answers');
    }

    public function getCorrectOptionId()
    {
        return $this->getValue('correct_option_id');
    }

    public function getExplanation()
    {
        return $this->getValue('explanation');
    }

    public function getExplanationEntities()
    {
        return new MessageEntity($this->getValue('explanation_entities'));
    }

    public function getOpenPeriod()
    {
        return $this->getValue('open_period');
    }

    public function getCloseDate()
    {
        return $this->getValue('close_date');
    }
}