<?php
/*
 *   Jamshidbek Akhlidinov
 *   22 - 4 2024 1:34:22
 *   https://ustadev.uz
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace ustadev\telegram\proxy;

class BotApi
{
    public int $last_update = 0;

    private string $token;

    public function __construct($token = null)
    {
        $this->token = $token;
    }

    public function setLastUpdate($id)
    {
        $this->last_update = ($id + 1);
    }

    public function getUpdates()
    {
        return $this->request('getUpdates', [
            'offset' => $this->last_update
        ]);
    }


    public function request($method, $data = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot{$this->token}/{$method}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}