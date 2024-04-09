<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:41:51
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Voice extends Objects
{
    public function getFileId()
    {
        return $this->getValue('file_id');
    }

    public function getFileUniqueId()
    {
        return $this->getValue('file_unique_id');
    }

    public function getDuration()
    {
        return $this->getValue('duration');
    }

    public function getMimeType()
    {
        return $this->getValue('mime_type');
    }

    public function getFileSize()
    {
        return $this->getValue('file_size');
    }
}