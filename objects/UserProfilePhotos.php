<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 20:54:43
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class UserProfilePhotos extends Objects
{
    public function getTotalCount()
    {
        return $this->getValue('total_count');
    }

    public function getPhotos()
    {
        $photos = $this->getValue('photos');
        $result = [];

        foreach ($photos as $photo) {
            $result[] = new PhotoSize($photo);
        }

        return $result;
    }
}