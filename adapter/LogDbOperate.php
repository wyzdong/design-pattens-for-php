<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 11:17
 */
class LogDbOperate implements LogDbOperateApi {
    public function createLog(LogModel $logModel)
    {
        // TODO: Implement createLog() method.
        throw new Exception("写入数据库中失败");
    }

    public function getAllLog()
    {
        // TODO: Implement getAllLog() method.
        throw new Exception("从数据库中获取所有记录失败");
    }
}