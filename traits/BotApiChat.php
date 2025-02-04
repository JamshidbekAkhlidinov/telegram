<?php
/*
 *  Jamshidbek Akhlidinov
 *   22 - 4 2024 19:21:51
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait BotApiChat
{
    public function getChat($chat_id)
    {
        return $this->request('getChat', [
            'chat_id' => $chat_id,
        ]);
    }

    public function getChatAdministrators($chat_id)
    {
        return $this->request('getChatAdministrators', [
            'chat_id' => $chat_id,
        ]);
    }

    public function getChatMemberCount($chat_id)
    {
        return $this->request('getChatMemberCount', [
            'chat_id' => $chat_id,
        ]);
    }

    public function getChatMember($chat_id, $user_id)
    {
        return $this->request('getChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ]);
    }

    public function setChatTitle($chat_id, $title)
    {
        return $this->request('setChatTitle', [
            'chat_id' => $chat_id,
            'title' => $title
        ]);
    }

    public function setChatDescription($chat_id, $description)
    {
        return $this->request('setChatDescription', [
            'chat_id' => $chat_id,
            'description' => $description
        ]);
    }


    public function pinChatMessage($chat_id, $message_id, $disable_notification = true)
    {
        return $this->request('pinChatMessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'disable_notification' => $disable_notification,
        ]);
    }


    public function unpinChatMessage($chat_id, $message_id)
    {
        return $this->request('unpinChatMessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ]);
    }

    public function unpinAllChatMessages($chat_id)
    {
        return $this->request('unpinAllChatMessages', [
            'chat_id' => $chat_id,
        ]);
    }

    public function leaveChat($chat_id)
    {
        return $this->request('leaveChat', [
            'chat_id' => $chat_id,
        ]);
    }

    public function setChatStickerSet($chat_id, $sticker_set_name)
    {
        return $this->request('setChatStickerSet', [
            'chat_id' => $chat_id,
            'sticker_set_name' => $sticker_set_name
        ]);
    }

    public function deleteChatStickerSet($chat_id)
    {
        return $this->request('deleteChatStickerSet', [
            'chat_id' => $chat_id,
        ]);
    }

    public function setChatPhoto($chat_id, $photo)
    {
        return $this->request('setChatPhoto', [
            'chat_id' => $chat_id,
            'photo' => $photo
        ]);
    }

    public function deleteChatPhoto($chat_id)
    {
        return $this->request('deleteChatPhoto', [
            'chat_id' => $chat_id,
        ]);
    }

    public function sendChatAction($chat_id, $action)
    {
        return $this->request('sendChatAction', [
            'action' => $action,
            'chat_id' => $chat_id,
        ]);
    }

    /**
     * @param $chat_id string chat_id in the chat
     * @param $message_id integer id of the message
     * @param $reaction string default random reaction
     */
    public function setMessageReaction($chat_id, $message_id, $reaction = null)
    {
        if (!$reaction) {
            $reactions = ["👍", "👎", "❤️", "🔥", "🥰", "👏", "😁", "🤔", "🤯", "😱", "🤬", "😢", "🎉", "🤩", "🤮", "💩", "🙏", "👌", "🕊", "🤡", "🥱", "🥴", "😍", "🐳", "❤️‍🔥", "🌚", "🌭", "💯", "🤣", "⚡️", "🍌", "🏆", "💔", "🤨", "😐", "🍓", "🍾", "💋", "🖕", "😈", "😴", "😭", "🤓", "👻", "👨‍💻", "👀", "🎃", "🙈", "😇", "😨", "🤝", "✍️", "🤗", "🫡", "🎅", "🎄", "☃️", "💅", "🤪", "🗿", "🆒", "💘", "🙉", "🦄", "😘", "💊", "🙊", "😎", "👾", "🤷‍♂️", "🤷", "🤷‍♀️", "😡"];
            $reaction = array_rand($reactions, 2);
            $reaction = $reactions[$reaction[0]];
        }
        return $this->request('setMessageReaction', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'reaction' => json_encode([
                [
                    'emoji' => $reaction,
                    'type' => 'emoji'
                ]
            ])
        ]);
    }

    public function getUserProfilePhotos($user_id, $offset, $limit)
    {
        return $this->request('getUserProfilePhotos', [
            'user_id' => $user_id,
            'offset' => $offset,
            'limit' => $limit
        ]);
    }

    public function getFile($file_id)
    {
        return $this->request('getFile', [
            'file_id' => $file_id,
        ]);
    }

    public function banChatMember($chat_id, $user_id, $until_date = 10 * 3600, $revoke_messages = true)
    {
        return $this->request('banChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $user_id,
            'until_date' => $until_date,
            'revoke_messages' => $revoke_messages,
        ]);
    }

    public function unbanChatMember($chat_id, $user_id)
    {
        return $this->request('unbanChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ]);
    }

    public function exportChatInviteLink($chat_id)
    {
        return $this->request('exportChatInviteLink', [
            'chat_id' => $chat_id,
        ]);
    }


    public function createChatInviteLink($chat_id)
    {
        return $this->request('createChatInviteLink', [
            'chat_id' => $chat_id,
        ]);
    }


}