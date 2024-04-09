<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 21:24:49
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\traits;

trait InlineQuery
{
    public function isInlineQuery()
    {
        return isset($this->update['inline_query']);
    }

    public function getInlineQuery()
    {
        return new \ustadev\telegram\types\InlineQuery($this->update['inline_query']);
    }
}