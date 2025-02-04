<?php
/*
 *  Jamshidbek Akhlidinov
 *   29 - 4 2024 18:1:36
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait BotApiEditMessage
{
    public function editMessageText($chat_id, $message_id, $text, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'text' => $text],
            $options
        );
        return $this->request('editMessageText', $fields);
    }

    public function editMessageCaption($chat_id, $message_id, $caption, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'caption' => $caption],
            $options
        );
        return $this->request('editMessageCaption', $fields);
    }

    public function editMessageMedia($chat_id, $message_id, $media, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'media' => $media],
            $options
        );
        return $this->request('editMessageMedia', $fields);
    }

    public function editMessageLiveLocation($chat_id, $message_id, $latitude, $longitude, $options = [])
    {
        $fields = array_merge([
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'latitude' => $latitude,
            'longitude' => $longitude
        ], $options);
        return $this->request('editMessageLiveLocation', $fields);
    }

    public function stopMessageLiveLocation($chat_id, $message_id, $options = [])
    {
        $fields = array_merge([
            'chat_id' => $chat_id,
            'message_id' => $message_id,
        ], $options);
        return $this->request('stopMessageLiveLocation', $fields);
    }


    public function editMessageReplyMarkup($chat_id, $message_id, $reply_markup, $options = [])
    {
        $fields = array_merge([
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'reply_markup' => $reply_markup,
        ], $options);
        return $this->request('editMessageReplyMarkup', $fields);
    }

    public function stopPoll($chat_id, $message_id, $options = [])
    {
        $fields = array_merge([
            'chat_id' => $chat_id,
            'message_id' => $message_id,
        ], $options);
        return $this->request('stopPoll', $fields);
    }


}