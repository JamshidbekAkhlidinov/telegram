<h2>Telegram bot uchun qulay repositoriya</h2>
***

**O'rnatish**

        
    composer require ustadev/telegram

Ishlatish uchun qo'llanma

```php
<?php
    $botApi = new BotApi("$token");
    $update = new Update($botApi->getWebhookUpdate());

     if ($update->isMessage()) {
        $message = $update->getMessage();
        $text = $message->isText() ? $message->getText() : '';
        $user = $message->getUser();
        $user_id = $user->getId();
    
        if ($text == '/start') {
            $bot->sendMessage($user_id, "Welcome");
        }
    
        if ($text == '/video') {
            $bot->sendVideo($user_id, "https://t.me/hukumdor_usmon_uzbek_kinolar_u/12204");
        }
    
        if ($text == '/doc') {
           $bot->sendDocument($user_id, "https://t.me/Nod32bazaa/3733");
        }
    
        if ($text == '/photo') {
            $bot->sendPhoto($user_id, "https://t.me/Nod32bazaa/3735");
        }
    
        if ($update->getMessage()->isAudio()) {
            print_r($update->getMessage()->getAudio());
        }
    
    }
    
?>

```

**Buttonlar(tugmalar) qo'yish uchun**

```php
$keyboard = new Keyboard();
$keyboard->addCallBack('CallBack','callBackData');
$keyboard->addUrl('Url link','https://t.me/jamshidbekakhlidinov');
$keyboard->addRow();
$keyboard->addSwtichInlineQueryCurrentChat('Query chat','query choosen chat');
$keyboard->addSwtichInlineQuery('Query','query text');
$keyboard->addRow();
$keyboard->addWebApp('web app', 'https://ustadev.uz');
$keyboard->addRequestPoll('poll button');

if ($text == '/button') {
    $bot->sendMessage(
        $user_id, 
        "<b>Buttons</b>",
        [
            'reply_markup' => $keyboard->init(),
            'parse_mode' => 'html',
        ]
   );
}

```


# telegram
