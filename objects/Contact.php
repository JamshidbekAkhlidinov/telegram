<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:43:38
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Contact extends Objects
{
    public function getPhoneNumber()
    {
        return $this->getValue('phone_number');
    }

    public function getFirstName()
    {
        return $this->getValue('first_name');
    }

    public function getLastName()
    {
        return $this->getValue('last_name');
    }

    public function getUserId()
    {
        return $this->getValue('user_id');
    }

    public function getVCard()
    {
        return $this->getValue('vcard');
    }
}