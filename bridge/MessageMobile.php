<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 13:57
 */
class MessageMobile implements MessageImplementor {
    public function send($message, $toUser)
    {
        // TODO: Implement send() method.
        echo "手机短消息形式发送：{$message} 给 {$toUser}\n";
    }
}