<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:1:34
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait File
{
    public function isFile()
    {
        return isset($this->update['file']);
    }

    public function getFile()
    {
        return new \ustadev\telegram\objects\File($this->update['file']);
    }
}