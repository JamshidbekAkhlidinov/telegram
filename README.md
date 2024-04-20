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

<img src="docphoto/buttons.png" alt="buttons">

**CallBack buttonlar bilan ishlash**

```php
$botApi = new BotApi("$token");
$update = new Update($botApi->getWebhookUpdate());

if ($update->isCallbackQuery()) {
    $callback = $update->getCallbackQuery();
    $user = $callback->getUser();
    $user_id = $user->getId();
    $data = $callback->getData();
    
    $keyboard = new Keyboard();
    $keyboard->addCallbackDataButton("Button title", "data_name");
    
    if ($data == 'data_name') {
        $botApi->sendMessage(
            $user_id, 
            "<b>Your text</b>", 
            [
                'reply_markup' => $keyboard->init(),
                'parse_mode' => 'html',
            ]
        );
    }  
}
```

**Inline Query bilan ishlash**

Bu yerda turli xildagi respons lar yaratish va ularning attribute lari yozib qo'yilgan

https://core.telegram.org/bots/api#inlinequeryresult

```php
$botApi = new BotApi("$token");
$update = new Update($botApi->getWebhookUpdate());

if ($update->isInlineQuery()) {
    $inlineQuery = $update->getInlineQuery();
    $query = $inlineQuery->getQuery();
    $query_id = $inlineQuery->getId();

    $keyboard = new Keyboard();
    $keyboard->addCallbackDataButton("Your CallBack button", "data_name");

    $photoUrl = "https://storage.kun.uz/source/thumbnails/_medium/10/egAyZ4_AtLF8OGa4bxD4hpZTI6vHFaqj_medium.jpg";

    if($query == 'photo'){
         $response = new InlineQueryResult();
         $response->addPhoto(
            "$photoUrl",
            "Rasmni yuborish",
            [
                'description' => 'bu rasm chatga yuboriladi',
                'caption' => $query,
            ]
        );
         $botApi->answerInlineQuery(
            $query_id,
            $response->init(),
        );
    }

    if($query == 'text'){
          $response = new InlineQueryResult();
          $response->addText(
            "Xabarni yuborish",
            "$query",
            [
                'description' => 'bu xabar chtga yuboriladi'
            ]
          );
         $botApi->answerInlineQuery(
            $query_id,
            $response->init(),
        );
    }

      if($query == 'document'){
         $response = new InlineQueryResult();
         $response->addDocument(
            "$photoUrl",
            "Yuborish doc",
            'application/pdf',
            [
                'caption' => $query
            ]
         );
         $botApi->answerInlineQuery(
            $query_id,
            $response->init(),
        );
    }
    
    
}
```
**Mana shu xolatdagi query lardan foydalnish mumkun**

<img src="docphoto/inline.png" alt="rasm">

# telegram
