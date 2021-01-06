<?php


namespace app;


class StartHandler extends \lib\TextHandler
{
    public function process($message)
    {
        $this->api->send_message(
            $message['chat']['id'],
            'Hello world!'
        );
    }
}