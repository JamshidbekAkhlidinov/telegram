<?php
/*
 *  Jamshidbek Akhlidinov
 *   6 - 4 2024 15:50:37
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram;

class InlineQueryResult
{
    public array $results = [];

    public function addText($title, $message, array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'article',
                'id' => base64_encode(rand(1000000, 9999999)),
                'title' => $title,
                'input_message_content' => [
                    'message_text' => $message
                ],
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }

    public function addPhoto($photo_url, $title, array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'photo',
                'id' => base64_encode(rand(1000000, 9999999)),
                'photo_url' => $photo_url,
                'thumbnail_url' => $photo_url,
                'title' => $title
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }

    public function addGif($title, $gif_url, $thumbnail_url, array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'gif',
                'id' => base64_encode(rand(1000000, 9999999)),
                'gif_url' => $gif_url,
                'title' => $title,
                'thumbnail_url' => $thumbnail_url
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }


    public function addMpeg4Gif($title, $gif_url, $thumbnail_url, array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'mpeg4_url',
                'id' => base64_encode(rand(1000000, 9999999)),
                'mpeg4_url' => $gif_url,
                'title' => $title,
                'thumbnail_url' => $thumbnail_url
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }


    public function addVideo($video_url, $title, $thumbnail_url, $mime_type = 'video/mp4', array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'video',
                'id' => base64_encode(rand(1000000, 9999999)),
                'video_url' => $video_url,
                'thumbnail_url' => $thumbnail_url ?? $video_url,
                'title' => $title,
                'mime_type' => $mime_type,
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }

    public function addAudio($audio_url, $title, array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'audio',
                'id' => base64_encode(rand(1000000, 9999999)),
                'audio_url' => $audio_url,
                'title' => $title
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }


    public function addDocument($document_url, $title, $mime_type = 'application/pdf', array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'document',
                'id' => base64_encode(rand(1000000, 9999999)),
                'document_url' => $document_url,
                'title' => $title,
                'mime_type' => $mime_type,
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }


    public function addContact($phone_number, $first_name, array $options = []): InlineQueryResult
    {
        $fields = array_merge(
            [
                'type' => 'contact',
                'id' => base64_encode(rand(1000000, 9999999)),
                'phone_number' => $phone_number,
                'first_name' => $first_name,
            ],
            $options
        );
        $this->results[] = $fields;
        return $this;
    }

    public function init()
    {
        return json_encode($this->results);
    }
}