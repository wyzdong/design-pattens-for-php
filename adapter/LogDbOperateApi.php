<?php
/**
 * 第二版，用数据库存日志
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 10:48
 */
interface LogDbOperateApi {
    public function createLog(LogModel $logModel);

    public function getAllLog();
}