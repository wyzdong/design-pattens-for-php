<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:40
 */
interface Flyweight {
    /**
     * @param $securityEntity   string  安全实体
     * @param $permit           string  权限
     * @return boolean
     */
    public function match($securityEntity, $permit);
}