<?php

namespace ustadev\telegram\proxy;

class Proxy
{
    public string $url;
    public string $token;

    public function __construct($url, $token)
    {
        $this->url = $url;
        $this->token = $token;
    }


    public function loop()
    {
        $bot = new BotApi($this->token);
        while (true) {
            $updates = $bot->getUpdates();
            foreach ($updates['result'] ?? [] as $update) {
                $result = $this->request($this->url, $update);
                print_r($result);
                $bot->setLastUpdate($update['update_id']);
            }
            sleep(1);
        }
    }

    public function request($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
}