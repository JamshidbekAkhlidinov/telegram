<?php
/*
 *  Jamshidbek Akhlidinov
 *   3 - 4 2024 19:32:19
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram;

class Objects
{
    public $update;

    public function __construct($update)
    {
        $this->update = $update;
    }

    public function get()
    {
        return $this->update;
    }


    protected function getValue($key)
    {
        return array_key_exists($key, $this->get()) ? $this->get()[$key] : null;
    }
}