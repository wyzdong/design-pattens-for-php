<?php
/**
 * 抽象部分
 * 消息的种类，有相关性，加急和特急都是在普通消息基础上扩展的
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 11:50
 */
class AbstractMessage {
    /**
     * @var MessageImplementor
     */
    protected $impl = null;

    public function __construct(MessageImplementor $implementor)
    {
        $this->impl = $implementor;
    }

    public function sendMessage($message, $toUser) {
        $this->impl->send($message, $toUser);
    }
}