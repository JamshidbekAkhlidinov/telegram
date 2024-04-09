<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:1:16
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait Document
{
    public function isDocument()
    {
        return isset($this->update['document']);
    }

    public function getDocument()
    {
        return new \ustadev\telegram\objects\Document($this->update['document']);
    }
}