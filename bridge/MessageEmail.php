<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 11:53
 */
class MessageEmail implements MessageImplementor {
    public function send($message, $toUser)
    {
        // TODO: Implement send() method.
        echo "Email 消息形式发送：{$message} 给 {$toUser}\n";
    }
}