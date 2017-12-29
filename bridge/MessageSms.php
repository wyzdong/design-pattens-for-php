<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 11:53
 */
class MessageSms implements MessageImplementor {
    public function send($message, $toUser)
    {
        // TODO: Implement send() method.
        echo "站内短消息形式发送：{$message} 给 {$toUser}\n";
    }
}