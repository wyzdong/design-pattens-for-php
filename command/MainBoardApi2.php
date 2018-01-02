<?php
/**
 * 主板接口
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 14:49
 */
interface MainBoardApi2 {
    /**
     * 主板拥有开机的功能
     */
    public function open();

    /**
     * 重启
     */
    public function reset();
}