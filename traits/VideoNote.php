<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:3:46
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait VideoNote
{
    public function isVideoNote()
    {
        return isset($this->update['video_note']);
    }

    public function getVideoNote()
    {
        return new \ustadev\telegram\objects\VideoNote($this->update['video_note']);
    }
}