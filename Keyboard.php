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
    private const REMOVE = 'remove';

    private array $keyboard = [];

    private int $row = 0;

    private string $buttonType = self::DEFAULT;

    public bool $is_persistent = false;
    public bool $resize_keyboard = true;
    public bool $one_time_keyboard = false;
    public string $input_field_placeholder = "placeholder";

    public bool $selective = true;


    /**
     * Adds a new row to the keyboard.
     *
     * This method creates a new empty row in the keyboard layout.
     * It automatically increments the internal row index if the current row already exists.
     *
     * Use this method when you want to start a new line of buttons.
     *
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @example
     * $keyboard->addDefault('Button 1')
     * $keyboard->addRow();
     * $keyboard->addDefault('Button 2');
     */
    public function addRow(): Keyboard
    {
        if (isset($this->keyboard[$this->row])) {
            $this->row++;
        }
        $this->keyboard[$this->row] = [];
        return $this;
    }

    /**
     * Adds a default text button to the current row.
     *
     * This method adds a regular (custom) keyboard button with plain text.
     * If no keyboard type is set yet, it defaults to a custom keyboard (DEFAULT).
     *
     * If another type (e.g., INLINE) has already been set, the button will not be added.
     *
     * @param string $text The label of the button to display.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @example
     * $keyboard->addDefault('Yes')
     * $keyboard->addDefault('No');
     */
    public function addDefault(string $text): Keyboard
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

    /**
     * Adds an inline keyboard button with callback data to the current row.
     *
     * This method creates an inline button that, when pressed, triggers a callback query.
     * It sets the keyboard type to INLINE if not already set.
     *
     * If the current keyboard is not of type INLINE, the button will not be added.
     *
     * @param string $text The visible text on the button.
     * @param string $callback The data to be sent in a callback query to the bot when the button is pressed.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
     *
     * @example
     * $keyboard->addCallBack('👍 Like', 'like_button');
     */
    public function addCallBack(string $text, $callback): Keyboard
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

    /**
     * Adds an inline keyboard button that opens a URL when pressed.
     *
     * This method creates a button that opens a web page in the browser when clicked.
     * It sets the keyboard type to INLINE if not already set.
     *
     * If the current keyboard is not of type INLINE, the button will not be added.
     *
     * @param string $text The label displayed on the button.
     * @param string $url The HTTPS URL to be opened when the button is pressed.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
     *
     * @example
     * $keyboard->addUrl('Visit USTADEV', 'https://ustadev.uz');
     */
    public function addUrl(string $text, string $url): Keyboard
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

    /**
     * Adds an inline button that inserts a predefined inline query into the current chat's input field.
     *
     * When the user presses the button, it opens the current chat with the specified query prefilled in the input.
     * Useful for helping users initiate inline queries with example text.
     *
     * Automatically sets the keyboard type to INLINE.
     * If the keyboard is not inline, the button will not be added.
     *
     * @param string $text The label displayed on the button.
     * @param string $switch_inline_query_current_chat The inline query to be inserted into the current chat input field.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
     *
     * @example
     * $keyboard->addSwitchInlineQueryCurrentChat('Search here', 'example query');
     */
    public function addSwitchInlineQueryCurrentChat(string $text, string $switch_inline_query_current_chat): Keyboard
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

    /**
     * Adds an inline button that inserts a predefined inline query into another chat's input field.
     *
     * When pressed, Telegram prompts the user to select a chat, and then inserts the given inline query.
     * Ideal for bots that work in inline mode and need to guide users across different chats.
     *
     * Automatically sets the keyboard type to INLINE.
     * If the keyboard is not inline, the button will not be added.
     *
     * @param string $text The label displayed on the button.
     * @param string $switch_inline_query The inline query to be inserted into the selected chat's input field.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
     *
     * @example
     * $keyboard->addSwitchInlineQuery('Search elsewhere', 'example query');
     */
    public function addSwitchInlineQuery(string $text, string $switch_inline_query): Keyboard
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

    /**
     * Adds an inline button that opens a Web App when pressed.
     *
     * This method adds a Telegram Web App button. When the user taps it, the given URL is opened in a Web App container.
     *
     * Automatically sets the keyboard type to INLINE. If another type (e.g., DEFAULT) is already set,
     * the button will not be added.
     *
     * @param string $text The label displayed on the button.
     * @param string $url The HTTPS URL of the Web App to be opened.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/webapps#launching-web-apps
     * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
     *
     * @example
     * $keyboard->addWebApp('Open USTADEV App', 'https://ustadev.uz/app');
     */
    public function addWebApp(string $text, string $url): Keyboard
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::INLINE;
        }

        if ($this->buttonType != self::INLINE) {
            return $this;
        }
        $this->keyboard[$this->row][] = ['text' => $text, 'web_app' => ['url' => $url]];
        return $this;
    }

    /**
     * Adds a custom keyboard button that requests the user's contact information.
     *
     * When the user taps the button, Telegram will prompt them to share their phone number.
     *
     * Automatically sets the keyboard type to DEFAULT. If the keyboard is already of type INLINE,
     * the button will not be added.
     *
     * @param string $text The label displayed on the button (e.g. "📞 Share Contact").
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#keyboardbutton
     *
     * @example
     * $keyboard->addRequestContact('📞 Share Contact');
     */
    public function addRequestContact(string $text): Keyboard
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

    /**
     * Adds a custom keyboard button that requests the user's current location.
     *
     * When the user taps this button, Telegram will prompt them to share their live location.
     *
     * This method automatically sets the keyboard type to DEFAULT. If the keyboard type is already INLINE,
     * the button will not be added.
     *
     * @param string $text The label displayed on the button (e.g. "📍 Share Location").
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#keyboardbutton
     *
     * @example
     * $keyboard->addRequestLocation('📍 Share Location');
     */
    public function addRequestLocation(string $text): Keyboard
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


    /**
     * Adds a custom keyboard button that allows the user to create and send a poll.
     *
     * This button lets the user select a poll type and send it. The poll can be of type "quiz" or "regular".
     *
     * Automatically sets the keyboard type to DEFAULT. If the keyboard is INLINE, the button will not be added.
     *
     * @param string $text The label displayed on the button (e.g. "🗳 Create Poll").
     * @param string $type The type of the poll to create. Acceptable values are 'quiz' and 'regular'.
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#keyboardbuttonpolltype
     *
     * @example
     * $keyboard->addRequestPoll('🗳 Create Poll', 'regular');
     */
    public function addRequestPoll(string $text, string $type = 'quiz'): Keyboard
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


    /**
     * Generates the JSON-encoded inline keyboard structure.
     *
     * This method is used internally to format inline keyboard buttons
     * according to Telegram Bot API requirements.
     *
     * @return string JSON string representing the inline keyboard layout.
     *
     * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
     */
    private function initInlineKeyboard(): string
    {
        return json_encode([
            'inline_keyboard' => $this->keyboard
        ]);
    }

    /**
     * Generates the JSON-encoded custom keyboard (reply keyboard) structure.
     *
     * This method is used internally to build the structure of reply keyboard markup.
     * Includes additional options such as keyboard persistence, resizing, and input placeholder.
     *
     * @return string JSON string representing the reply keyboard layout.
     *
     * @see https://core.telegram.org/bots/api#replykeyboardmarkup
     */
    private function initCustomKeyboard(): string
    {
        return json_encode([
            'keyboard' => $this->keyboard,
            'is_persistent' => $this->is_persistent,
            'resize_keyboard' => $this->resize_keyboard,
            'one_time_keyboard' => $this->one_time_keyboard,
            'input_field_placeholder' => $this->input_field_placeholder,
            'selective' => $this->selective,
        ]);
    }

    /**
     * Sets the keyboard type to REMOVE, indicating that the current keyboard should be hidden.
     *
     * When this method is called, the keyboard type is marked for removal,
     * and the next call to `init()` will generate the proper JSON to hide the keyboard.
     *
     * @return $this Returns the current Keyboard instance for method chaining.
     *
     * @see https://core.telegram.org/bots/api#replykeyboardremove
     *
     * @example
     * $keyboard->removeKeyboard();
     */
    public function removeKeyboard(): Keyboard
    {
        if (empty($this->keyboard)) {
            $this->buttonType = self::REMOVE;
        }
        return $this;
    }


    /**
     * Builds and returns the final reply markup in JSON format based on the current keyboard type.
     *
     * This method is used to generate the appropriate `reply_markup` payload for sending messages via Telegram Bot API.
     * It automatically detects the keyboard type (INLINE, DEFAULT, or REMOVE) and returns the corresponding structure:
     *
     * - If the keyboard type is `REMOVE`, returns `{"remove_keyboard": true}`.
     * - If the keyboard type is `INLINE`, returns inline keyboard markup.
     * - Otherwise, returns custom (default) keyboard markup.
     *
     * @return string JSON-encoded reply_markup suitable for use with Telegram's sendMessage and similar methods.
     *
     * @see https://core.telegram.org/bots/api#replykeyboardmarkup
     * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup
     * @see https://core.telegram.org/bots/api#replykeyboardremove
     *
     * @example
     * $keyboard = (new Keyboard())
     *     ->addDefault('Option 1')
     *     ->addRow()
     *     ->addDefault('Option 2');
     *
     * $bot->sendMessage($chatId, 'Choose:', [
     *     'reply_markup' => $keyboard->init()
     * ]);
     */
    public function init(): string
    {
        if ($this->buttonType == self::REMOVE) {
            return json_encode([
                'remove_keyboard' => true,
            ]);
        } elseif ($this->buttonType == self::INLINE) {
            return $this->initInlineKeyboard();
        } else {
            return $this->initCustomKeyboard();
        }
    }

}