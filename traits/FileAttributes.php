<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:28:27
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait FileAttributes
{
    public function getFileId()
    {
        return $this->getValue('file_id');
    }

    public function getFileUniqueId()
    {
        return $this->getValue('file_unique_id');
    }

    public function getThumbnail()
    {
        return $this->getValue('thumbnail');
    }

    public function getFileName()
    {
        return $this->getValue('file_name');
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