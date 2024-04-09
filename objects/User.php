<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:30:5
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;


use ustadev\telegram\Objects;

class User extends Objects
{
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getIsBot()
    {
        return $this->getValue('is_bot');
    }

    public function getFirstName()
    {
        return $this->getValue('first_name');
    }

    public function getLastName()
    {
        return $this->getValue('last_name');
    }

    public function getUsername()
    {
        return $this->getValue('username');
    }

    public function getLanguageCode()
    {
        return $this->getValue('language_code');
    }

    public function getIsPremium()
    {
        return $this->getValue('is_premium');
    }

    public function getAddedToAttachmentMenu()
    {
        return $this->getValue('added_to_attachment_menu');
    }

    public function getCanJoinGroups()
    {
        return $this->getValue('can_join_groups');
    }

    public function getCanReadAllGroupMessages()
    {
        return $this->getValue('can_read_all_group_messages');
    }

    public function getSupportsInlineQueries()
    {
        return $this->getValue('supports_inline_queries');
    }

    public function getCanConnectToBusiness()
    {
        return $this->getValue('can_connect_to_business');
    }

}