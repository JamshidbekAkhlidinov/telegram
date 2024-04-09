<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:4:7
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait WebAppData
{
    public function isWebAppData()
    {
        return isset($this->update['web_app_data']);
    }

    public function getWebAppData()
    {
        return new \ustadev\telegram\objects\WebAppData($this->update['web_app_data']);
    }
}