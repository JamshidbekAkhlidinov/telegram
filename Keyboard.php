<?php
/*
 *  Jamshidbek Akhlidinov
 *   6 - 4 2024 15:49:37
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram;

class Keyboard
{
    private const INLINE = 'inline';
    private const DEFAULT = 'default';

    private $keyboard = [];

    private $row = 0;

    private $buttonType = self::DEFAULT;


    public function addRow()
    {
        if (isset($this->keyboard[$this->row])) {
            $this->row++;
        }
        $this->keyboard[$this->row] = [];
        return $this;
    }

    public function addDefault($text)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::DEFAULT;
        }

        if ($this->buttonType != self::DEFAULT) {
            return $this;
        }

        $this->keyboard[$this->row][] = ['text' => $text];
        return $this;
    }

    public function addCallBack($text, $callback)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::INLINE;
        }

        if ($this->buttonType != self::INLINE) {
            return $this;
        }
        $this->keyboard[$this->row][] = ['text' => $text, 'callback_data' => $callback];
        return $this;
    }

    public function addUrl($text, $url)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::INLINE;
        }

        if ($this->buttonType != self::INLINE) {
            return $this;
        }

        $this->keyboard[$this->row][] = ['text' => $text, 'url' => $url];
        return $this;
    }

    public function addSwtichInlineQueryCurrentChat($text, $switch_inline_query_current_chat)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::INLINE;
        }

        if ($this->buttonType != self::INLINE) {
            return $this;
        }

        $this->keyboard[$this->row][] = ['text' => $text, 'switch_inline_query_current_chat' => $switch_inline_query_current_chat];
        return $this;
    }

    public function addSwtichInlineQuery($text, $switch_inline_query)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::INLINE;
        }

        if ($this->buttonType != self::INLINE) {
            return $this;
        }

        $this->keyboard[$this->row][] = ['text' => $text, 'switch_inline_query' => $switch_inline_query];
        return $this;
    }

    public function addWebApp($text, $url)
    {
        $this->keyboard[$this->row][] = ['text' => $text, 'web_app' => ['url' => $url]];
        return $this;
    }

    public function addRequestContact($text)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::DEFAULT;
        }

        if ($this->buttonType != self::DEFAULT) {
            return $this;
        }
        $this->keyboard[$this->row][] = ['text' => $text, 'request_contact' => true];
        return $this;
    }

    public function addRequestLocation($text)
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::DEFAULT;
        }

        if ($this->buttonType != self::DEFAULT) {
            return $this;
        }
        $this->keyboard[$this->row][] = ['text' => $text, 'request_location' => true];
        return $this;
    }


    public function addRequestPoll($text, $type = 'quiz')
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::DEFAULT;
        }

        if ($this->buttonType != self::DEFAULT) {
            return $this;
        }
        $this->keyboard[$this->row][] = ['text' => $text, 'request_poll' => ['type' => $type]];
        return $this;
    }


    private function initInlineKeyboard()
    {
        return json_encode([
            'inline_keyboard' => $this->keyboard
        ]);
    }


    private function initCustomKeyboard()
    {
        return json_encode([
            'keyboard' => $this->keyboard
        ]);
    }


    public function init()
    {
        if ($this->buttonType == self::INLINE) {
            return $this->initInlineKeyboard();
        }

        return $this->initCustomKeyboard();
    }

}