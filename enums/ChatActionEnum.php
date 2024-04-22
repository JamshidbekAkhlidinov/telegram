<?php
/*
 *  Jamshidbek Akhlidinov
 *   22 - 4 2024 19:30:10
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\enums;

interface ChatActionEnum
{
    public const messages = 'messages';
    public const upload_photo = 'upload_photo';
    public const record_video = 'record_video';
    public const upload_video = 'upload_video';
    public const record_voice = 'record_voice';
    public const upload_voice = 'upload_voice';
    public const upload_document = 'upload_document';
    public const choose_sticker = 'choose_sticker';
    public const find_location = 'find_location';
    public const record_video_note = 'record_video_note';
    public const upload_video_note = 'upload_video_note';
}