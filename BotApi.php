<?php

namespace ustadev\telegram;

use ustadev\telegram\traits\BotApiChat;
use ustadev\telegram\traits\BotApiEditMessage;

/**
 * Class BotApi
 *
 * Main class to interact with the Telegram Bot API.
 * Uses traits BotApiChat and BotApiEditMessage for extended functionalities.
 */
class BotApi
{
    use BotApiChat, BotApiEditMessage;

    /**
     * @var string Telegram Bot API token
     */
    public $token;

    /**
     * BotApi constructor.
     *
     * @param string $token Telegram Bot API token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Sends answers to an inline query.
     *
     * @see https://core.telegram.org/bots/api#answerinlinequery
     *
     * @param string $queryId Unique identifier for the answered query
     * @param array $results An array of results for the inline query
     * @param array $options Optional parameters such as `cache_time`, `is_personal`, etc.
     * @return mixed
     */
    public function answerInlineQuery($queryId, $results, $options = [])
    {
        $fields = array_merge(['inline_query_id' => $queryId, 'results' => $results], $options);
        return $this->request('answerInlineQuery', $fields);
    }

    /**
     * Sends an answer to a callback query sent from an inline keyboard button.
     *
     * @see https://core.telegram.org/bots/api#answercallbackquery
     *
     * @param string $callback_id Unique identifier for the callback query to be answered
     * @param string $text Text of the notification to be shown to the user
     * @param array $options Optional parameters such as `show_alert`, `url`, `cache_time`, etc.
     * @return mixed
     */
    public function answerCallbackQuery($callback_id, $text, $options = [])
    {
        $fields = array_merge(['callback_query_id' => $callback_id, 'text' => $text, 'show_alert' => false], $options);
        return $this->request('answerCallbackQuery', $fields);
    }

    /**
     * Sends a text message to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendmessage
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $text Text of the message to be sent
     * @param array $options Optional parameters such as `parse_mode`, `reply_markup`, `disable_notification`, etc.
     * @return mixed
     */
    public function sendMessage($chat_id, $text, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'text' => $text], $options);
        return $this->request('sendMessage', $fields);
    }

    /**
     * Sends a photo to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendphoto
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $photo Photo to send. Pass a file_id as string to send a photo that exists on the Telegram servers,
     *                      an HTTP URL for Telegram to get a photo from the Internet, or “attach://<file_attach_name>” to upload a new one.
     * @param array $options Optional parameters such as `caption`, `parse_mode`, `reply_markup`, etc.
     * @return mixed
     */
    public function sendPhoto($chat_id, $photo, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'photo' => $photo], $options);
        return $this->request('sendPhoto', $fields);
    }

    /**
     * Sends a video to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendvideo
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $video Video to send. Pass a file_id, an HTTP URL, or “attach://<file_attach_name>” for uploading.
     * @param array $options Optional parameters such as `caption`, `duration`, `width`, `height`, `supports_streaming`, etc.
     * @return mixed
     */
    public function sendVideo($chat_id, $video, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'video' => $video], $options);
        return $this->request('sendVideo', $fields);
    }


    /**
     * Sends an animation (GIF or H.264/MPEG-4 AVC video without sound) to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendanimation
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $animation Animation to send. Pass a file_id, HTTP URL, or “attach://<file_attach_name>”
     * @param array $options Optional parameters such as `duration`, `width`, `height`, `caption`, etc.
     * @return mixed
     */
    public function sendAnimation($chat_id, $animation, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'animation' => $animation], $options);
        return $this->request('sendAnimation', $fields);
    }

    /**
     * Sends an audio file to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendaudio
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $audio Audio file to send. Pass a file_id, HTTP URL, or “attach://<file_attach_name>”
     * @param array $options Optional parameters such as `caption`, `duration`, `performer`, `title`, etc.
     * @return mixed
     */
    public function sendAudio($chat_id, $audio, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'audio' => $audio], $options);
        return $this->request('sendAudio', $fields);
    }

    /**
     * Sends general files to a chat.
     *
     * @see https://core.telegram.org/bots/api#senddocument
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $document Document to send. Pass a file_id, HTTP URL, or “attach://<file_attach_name>”
     * @param array $options Optional parameters such as `caption`, `parse_mode`, `disable_content_type_detection`, etc.
     * @return mixed
     */
    public function sendDocument($chat_id, $document, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'document' => $document], $options);
        return $this->request('sendDocument', $fields);
    }

    /**
     * Sends a .WEBP format sticker to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendsticker
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $sticker Sticker to send. Pass a file_id, HTTP URL, or “attach://<file_attach_name>”
     * @param array $options Optional parameters such as `disable_notification`, `reply_to_message_id`, etc.
     * @return mixed
     */
    public function sendSticker($chat_id, $sticker, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'sticker' => $sticker], $options);
        return $this->request('sendSticker', $fields);
    }

    /**
     * Gets a sticker set by name.
     *
     * @see https://core.telegram.org/bots/api#getstickerset
     *
     * @param string $name Name of the sticker set
     * @return mixed
     */
    public function getStickerGroup($name)
    {
        return $this->request('getStickerSet', [
            'name' => $name,
        ]);
    }


    /**
     * Sends a video message (video note) to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendvideonote
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $video_note Video note to send. Pass a file_id or “attach://<file_attach_name>”
     * @param array $options Optional parameters such as `duration`, `length`, `thumb`, etc.
     * @return mixed
     */
    public function sendVideoNote($chat_id, $video_note, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'video_note' => $video_note], $options);
        return $this->request('sendVideoNote', $fields);
    }

    /**
     * Sends an audio file in .OGG format encoded with OPUS to a chat (voice message).
     *
     * @see https://core.telegram.org/bots/api#sendvoice
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $voice Voice file to send. Pass a file_id, HTTP URL, or “attach://<file_attach_name>”
     * @param array $options Optional parameters such as `caption`, `duration`, `parse_mode`, etc.
     * @return mixed
     */
    public function sendVoice($chat_id, $voice, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'voice' => $voice], $options);
        return $this->request('sendVoice', $fields);
    }

    /**
     * Sends a location to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendlocation
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param float $latitude Latitude of the location
     * @param float $longitude Longitude of the location
     * @param array $options Optional parameters such as `horizontal_accuracy`, `live_period`, `heading`, etc.
     * @return mixed
     */
    public function sendLocation($chat_id, $latitude, $longitude, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'latitude' => $latitude, 'longitude' => $longitude], $options);
        return $this->request('sendLocation', $fields);
    }

    /**
     * Sends information about a venue (location with address and name).
     *
     * @see https://core.telegram.org/bots/api#sendvenue
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param float $latitude Latitude of the venue
     * @param float $longitude Longitude of the venue
     * @param string $title Name of the venue
     * @param string $address Address of the venue
     * @param array $options Optional parameters such as `foursquare_id`, `google_place_id`, etc.
     * @return mixed
     */
    public function sendVenue($chat_id, $latitude, $longitude, $title, $address, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'latitude' => $latitude, 'longitude' => $longitude, 'title' => $title, 'address' => $address], $options);
        return $this->request('sendVenue', $fields);
    }

    /**
     * Sends a contact with phone number and first name.
     *
     * @see https://core.telegram.org/bots/api#sendcontact
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param array $options Optional parameters such as `last_name`, `vcard`, etc.
     * @return mixed
     */
    public function sendContact($chat_id, $phone_number, $first_name, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'phone_number' => $phone_number, 'first_name' => $first_name], $options);
        return $this->request('sendContact', $fields);
    }


    /**
     * Sends a poll to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendpoll
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string $question Poll question, 1-300 characters
     * @param array $optionsData Array of answer options, 2-10 strings 1-100 characters each
     * @param array $options Optional parameters such as `is_anonymous`, `type`, `allows_multiple_answers`, etc.
     * @return mixed
     */
    public function sendPoll($chat_id, $question, $optionsData, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'question' => $question, 'options' => $optionsData], $options);
        return $this->request('sendPoll', $fields);
    }

    /**
     * Sends a dice with a random value.
     *
     * @see https://core.telegram.org/bots/api#senddice
     *
     * @param string|int $chat_id Unique identifier for the target chat or username of the target channel
     * @param string|null $emoji Emoji on which the dice throw animation is based ('🎲', '🎯', '🏀', '⚽', '🎳', or '🎰')
     * @param array $options Optional parameters such as `disable_notification`, `reply_to_message_id`, etc.
     * @return mixed
     */
    public function sendDice($chat_id, $emoji = null, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'emoji' => $emoji], $options);
        return $this->request('sendDice', $fields);
    }

    /**
     * Sends a game message to a chat.
     *
     * @see https://core.telegram.org/bots/api#sendgame
     *
     * @param string|int $chat_id Unique identifier for the target chat
     * @param string $game_short_name Short name of the game, must be created via @BotFather
     * @param array $options Optional parameters such as `reply_markup`, etc.
     * @return mixed
     */
    public function sendGame($chat_id, $game_short_name, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'game_short_name' => $game_short_name], $options);
        return $this->request('sendGame', $fields);
    }

    /**
     * Sends a group of photos, videos, documents or audios as an album.
     *
     * @see https://core.telegram.org/bots/api#sendmediagroup
     *
     * @param string|int $chat_id Unique identifier for the target chat
     * @param array $media Array of InputMediaPhoto/InputMediaVideo/InputMediaDocument/InputMediaAudio
     * @param array $options Optional parameters such as `disable_notification`, `reply_to_message_id`, etc.
     * @return mixed
     */
    public function sendMediaGroup($chat_id, $media, $options = [])
    {
        $fields = array_merge(['chat_id' => $chat_id, 'media' => $media], $options);
        return $this->request('sendMediaGroup', $fields);
    }

    /**
     * Copies a message from one chat to another.
     *
     * @see https://core.telegram.org/bots/api#copymessage
     *
     * @param string|int $chat_id Target chat ID
     * @param string|int $from_chat_id Source chat ID
     * @param int $message_id Message ID in the source chat
     * @param array $options Optional parameters such as `caption`, `parse_mode`, etc.
     * @return mixed
     */
    public function copyMessage($chat_id, $from_chat_id, $message_id, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('copyMessage', $fields);
    }

    /**
     * Copies multiple messages from one chat to another.
     *
     * Note: This is a custom implementation. Telegram API does not officially support copyMessages.
     *
     * @param string|int $chat_id Target chat ID
     * @param string|int $from_chat_id Source chat ID
     * @param array $message_ids Array of message IDs in the source chat
     * @param array $options Optional parameters
     * @return mixed
     */
    public function copyMessages($chat_id, $from_chat_id, $message_ids, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_ids' => $message_ids, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('copyMessages', $fields);
    }

    /**
     * Forwards a single message from one chat to another.
     *
     * @see https://core.telegram.org/bots/api#forwardmessage
     *
     * @param string|int $chat_id Target chat ID
     * @param string|int $from_chat_id Source chat ID
     * @param int $message_id Message ID to forward
     * @param array $options Optional parameters such as `disable_notification`, etc.
     * @return mixed
     */
    public function forwardMessage($chat_id, $from_chat_id, $message_id, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_id' => $message_id, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('forwardMessage', $fields);
    }

    /**
     * Forwards multiple messages from one chat to another.
     *
     * Note: This is a custom implementation. Telegram API does not officially support forwardMessages.
     *
     * @param string|int $chat_id Target chat ID
     * @param string|int $from_chat_id Source chat ID
     * @param array $message_ids Array of message IDs to forward
     * @param array $options Optional parameters
     * @return mixed
     */
    public function forwardMessages($chat_id, $from_chat_id, $message_ids, $options = [])
    {
        $fields = array_merge(
            ['chat_id' => $chat_id, 'message_ids' => $message_ids, 'from_chat_id' => $from_chat_id],
            $options
        );
        return $this->request('forwardMessages', $fields);
    }

    /**
     * Delete a single message sent by the bot.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * @param int $message_id Identifier of the message to delete
     * @return mixed
     * Doc: https://core.telegram.org/bots/api#deletemessage
     */
    public function deleteMessage($chat_id, $message_id)
    {
        $fields = ['chat_id' => $chat_id, 'message_id' => $message_id];
        return $this->request('deleteMessage', $fields);
    }

    /**
     * Delete multiple messages sent by the bot.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel
     * @param array $message_ids Array of message IDs to delete
     * @return mixed
     * Doc: https://core.telegram.org/bots/api#deletemessages
     */
    public function deleteMessages($chat_id, $message_ids)
    {
        $fields = ['chat_id' => $chat_id, 'message_id' => $message_ids];
        return $this->request('deleteMessages', $fields);
    }

    /**
     * Get basic information about the bot.
     *
     * @return mixed
     * Doc: https://core.telegram.org/bots/api#getme
     */
    public function getMe()
    {
        return $this->request('getMe');
    }

    /**
     * Get the incoming update sent via webhook.
     *
     * @return array|null Returns the decoded update array or null on failure
     * Doc: https://core.telegram.org/bots/api#getting-updates
     */
    public function getWebhookUpdate()
    {
        return json_decode(file_get_contents('php://input'), true);
    }


    /**
     * Sends a request to the Telegram Bot API.
     *
     * @param string $method The API method to be called (e.g., 'sendMessage', 'getMe', etc.)
     * @param array $data The parameters to be sent with the request
     * @return array|null The decoded JSON response from Telegram, or null on failure
     *
     * Default options added automatically:
     * - parse_mode: html
     * - disable_notification: false
     * - protect_content: false
     *
     * Doc: https://core.telegram.org/bots/api
     */
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