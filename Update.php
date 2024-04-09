<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:33:31
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram;

use ustadev\telegram\traits\CallbackQuery;
use ustadev\telegram\traits\InlineQuery;
use ustadev\telegram\traits\Message;

class Update extends Objects
{
    use Message, CallbackQuery, InlineQuery;
}