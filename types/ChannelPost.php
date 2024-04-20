<?php
/*
 *  Jamshidbek Akhlidinov
 *   20 - 4 2024 19:33:16
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\types;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\Audio;
use ustadev\telegram\traits\Chat;
use ustadev\telegram\traits\Contact;
use ustadev\telegram\traits\Dice;
use ustadev\telegram\traits\Document;
use ustadev\telegram\traits\File;
use ustadev\telegram\traits\Location;
use ustadev\telegram\traits\MessageEntity;
use ustadev\telegram\traits\Photo;
use ustadev\telegram\traits\Poll;
use ustadev\telegram\traits\PollAnswer;
use ustadev\telegram\traits\PollOption;
use ustadev\telegram\traits\SenderChat;
use ustadev\telegram\traits\Story;
use ustadev\telegram\traits\Text;
use ustadev\telegram\traits\User;
use ustadev\telegram\traits\Venue;
use ustadev\telegram\traits\Video;
use ustadev\telegram\traits\VideoNote;
use ustadev\telegram\traits\Voice;
use ustadev\telegram\traits\WebAppData;

class ChannelPost extends Objects
{
    use SenderChat, Text;
    use  Audio, Contact, Dice, Document, File, Location;
    use MessageEntity, Photo,Poll, PollAnswer, PollOption, Story;
    use Text, User, Venue, Video, VideoNote, Voice, WebAppData;

    public function getMessageId()
    {
        return $this->update['message_id'];
    }
}