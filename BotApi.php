<?php

namespace ustadev\telegram;

use ustadev\telegram\traits\BotApiChat;

class BotApi
{
    use BotApiChat;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function answerInlineQuery($queryId, $results, $options = [])
    {
        $fields = array_merge(['inline_query_id' => $queryId, 'results' => $results], $options);
        return $this->request('answerInlineQuery', $fields);
    }

    public function sendMessage($chat_id, $text, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'text' => $text], $options);
        return $this->request('sendMessage', $fields);
    }

    public function sendPhoto($chat_id, $photo, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'photo' => $photo], $options);
        return $this->request('sendPhoto', $fields);
    }

    public function sendVideo($chat_id, $video, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'video' => $video], $options);
        return $this->request('sendVideo', $fields);
    }

    public function sendAnimation($chat_id, $animation, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'animation' => $animation], $options);
        return $this->request('sendAnimation', $fields);
    }

    public function sendAudio($chat_id, $audio, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'audio' => $audio], $options);
        return $this->request('sendAudio', $fields);
    }

    public function sendDocument($chat_id, $document, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'document' => $document], $options);
        return $this->request('sendDocument', $fields);
    }

    public function sendSticker($chat_id, $sticker, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'sticker' => $sticker], $options);
        return $this->request('sendSticker', $fields);
    }

    public function sendVideoNote($chat_id, $video_note, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'video_note' => $video_note], $options);
        return $this->request('sendVideoNote', $fields);
    }

    public function sendVoice($chat_id, $voice, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'voice' => $voice], $options);
        return $this->request('sendVoice', $fields);
    }

    public function sendLocation($chat_id, $latitude, $longitude, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'latitude' => $latitude, 'longitude' => $longitude], $options);
        return $this->request('sendLocation', $fields);
    }

    public function sendVenue($chat_id, $latitude, $longitude, $title, $address, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'latitude' => $latitude, 'longitude' => $longitude, 'title' => $title, 'address' => $address], $options);
        return $this->request('sendVenue', $fields);
    }

    public function sendContact($chat_id, $phone_number, $first_name, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'phone_number' => $phone_number, 'first_name' => $first_name], $options);
        return $this->request('sendContact', $fields);
    }

    public function sendPoll($chat_id, $question, $optionsData, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'question' => $question, 'options' => $optionsData], $options);
        return $this->request('sendPoll', $fields);
    }

    public function sendDice($chat_id, $emoji = null, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'emoji' => $emoji], $options);
        return $this->request('sendDice', $fields);
    }

    public function sendGame($chat_id, $game_short_name, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'game_short_name' => $game_short_name], $options);
        return $this->request('sendGame', $fields);
    }

    public function sendMediaGroup($chat_id, $media, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'media' => $media], $options);
        return $this->request('sendMediaGroup', $fields);
    }

    public function copyMessage($chat_id, $from_chat_id, $message_id, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('copyMessage', $fields);
    }

    public function copyMessages($chat_id, $from_chat_id, $message_ids, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_ids' => $message_ids, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('copyMessages', $fields);
    }


    public function forwardMessage($chat_id, $from_chat_id, $message_id, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('forwardMessage', $fields);
    }

    public function forwardMessages($chat_id, $from_chat_id, $message_ids, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_ids' => $message_ids, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('forwardMessages', $fields);
    }


    public function deleteMessage($chat_id, $message_id)
    {
        $fields = ['chat_id' => $chat_id, 'message_id' => $message_id];
        return $this->request('deleteMessage', $fields);
    }

    public function deleteMessages($chat_id, $message_ids)
    {
        $fields = ['chat_id' => $chat_id, 'message_id' => $message_ids];
        return $this->request('deleteMessages', $fields);
    }


    public function getMe()
    {
        return $this->request('getMe');
    }


    public function getWebhookUpdate()
    {
        return json_decode(file_get_contents('php://input'), true);
    }


    public function request($method, $data = [])
    {
        $optionsData = [
            'parse_mode' => 'html',
            'disable_notification' => false,
            'protect_content' => false,
        ];
        $options = array_merge($optionsData, $data);

        $ch = curl_init();
        $url = 'https://api.telegram.org/bot' . $this->token . '/' . $method;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $options);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return json_decode($result, true);
    }
}