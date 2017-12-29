<?php
/**
 * 计算奖金的接口组件
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 16:51
 */
abstract class Component {
    /**
     * @param $user     string 被计算奖金的人员
     * @param $begin    string 开始日期
     * @param $end      string 结束日期
     * @return double
     */
    public abstract function calcPrice($user, $begin, $end);
}