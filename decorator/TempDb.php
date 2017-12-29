<?php
/**
 * 模拟数据库
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 17:09
 */
class TempDb {
    private function __construct()
    {
    }

    public static $mapMonthSaleMoney = [
        "张三" => 10000.0,
        "李四" => 20000.0,
        "王五" => 30000.0,
    ];
}