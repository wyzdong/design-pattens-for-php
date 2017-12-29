<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 11:57
 */
class UrgencyMessage extends AbstractMessage {
    public function sendMessage($message, $toUser)
    {
        $message = '(加急)' . $message;
        parent::sendMessage($message, $toUser); // TODO: Change the autogenerated stub
    }

    public function watch($messageId) {
        // 监听消息
        return null;
    }
}