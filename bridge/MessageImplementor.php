<?php
/**
 * 实现部分
 * 消息发送形式，互相独立
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 11:48
 */
interface MessageImplementor {
    /**
     * 发送消息
     * @param $message  string 发送的消息内容
     * @param $toUser   string 消息接受人
     */
    public function send($message, $toUser);
}