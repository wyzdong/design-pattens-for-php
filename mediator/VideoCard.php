<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:43
 */
class VideoCard extends Colleague {
    public function showData($data) {
        echo "您正在观看的是：" . $data . "\n";
    }
}