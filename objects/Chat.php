<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:29:58
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Chat extends Objects
{
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getType()
    {
        return $this->getValue('type');
    }

    public function getTitle()
    {
        return $this->getValue('title');
    }

    public function getUsername()
    {
        return $this->getValue('username');
    }

    public function getFirstName()
    {
        return $this->getValue('first_name');
    }

    public function getLastName()
    {
        return $this->getValue('last_name');
    }

    public function getIsForum()
    {
        return $this->getValue('is_forum');
    }

    public function getPhoto()
    {
        return $this->getValue('photo');
    }

    public function getActiveUsernames()
    {
        return $this->getValue('active_usernames');
    }

    public function getBirthdate()
    {
        return $this->getValue('birthdate');
    }

    public function getBusinessIntro()
    {
        return $this->getValue('business_intro');
    }

    public function getBusinessLocation()
    {
        return $this->getValue('business_location');
    }

    public function getBusinessOpeningHours()
    {
        return $this->getValue('business_opening_hours');
    }

    public function getPersonalChat()
    {
        return $this->getValue('personal_chat');
    }

    public function getAvailableReactions()
    {
        return $this->getValue('available_reactions');
    }

    public function getAccentColorId()
    {
        return $this->getValue('accent_color_id');
    }

    public function getBackgroundCustomEmojiId()
    {
        return $this->getValue('background_custom_emoji_id');
    }

    public function getProfileAccentColorId()
    {
        return $this->getValue('profile_accent_color_id');
    }

    public function getProfileBackgroundCustomEmojiId()
    {
        return $this->getValue('profile_background_custom_emoji_id');
    }

    public function getEmojiStatusCustomEmojiId()
    {
        return $this->getValue('emoji_status_custom_emoji_id');
    }

    public function getEmojiStatusExpirationDate()
    {
        return $this->getValue('emoji_status_expiration_date');
    }

    public function getBio()
    {
        return $this->getValue('bio');
    }

    public function getHasPrivateForwards()
    {
        return $this->getValue('has_private_forwards');
    }

    public function getHasRestrictedVoiceAndVideoMessages()
    {
        return $this->getValue('has_restricted_voice_and_video_messages');
    }

    public function getJoinToSendMessages()
    {
        return $this->getValue('join_to_send_messages');
    }

    public function getJoinByRequest()
    {
        return $this->getValue('join_by_request');
    }

    public function getDescription()
    {
        return $this->getValue('description');
    }

    public function getInviteLink()
    {
        return $this->getValue('invite_link');
    }

    public function getPinnedMessage()
    {
        return $this->getValue('pinned_message');
    }

    public function getPermissions()
    {
        return $this->getValue('permissions');
    }

    public function getSlowModeDelay()
    {
        return $this->getValue('slow_mode_delay');
    }

    public function getUnrestrictBoostCount()
    {
        return $this->getValue('unrestrict_boost_count');
    }

    public function getMessageAutoDeleteTime()
    {
        return $this->getValue('message_auto_delete_time');
    }

    public function getHasAggressiveAntiSpamEnabled()
    {
        return $this->getValue('has_aggressive_anti_spam_enabled');
    }

    public function getHasHiddenMembers()
    {
        return $this->getValue('has_hidden_members');
    }

    public function getHasProtectedContent()
    {
        return $this->getValue('has_protected_content');
    }

    public function getHasVisibleHistory()
    {
        return $this->getValue('has_visible_history');
    }

    public function getStickerSetName()
    {
        return $this->getValue('sticker_set_name');
    }

    public function getCanSetStickerSet()
    {
        return $this->getValue('can_set_sticker_set');
    }

    public function getCustomEmojiStickerSetName()
    {
        return $this->getValue('custom_emoji_sticker_set_name');
    }

    public function getLinkedChatId()
    {
        return $this->getValue('linked_chat_id');
    }

    public function getLocation()
    {
        return $this->getValue('location');
    }
}