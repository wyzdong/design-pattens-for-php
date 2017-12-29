<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 10:51
 */
class Adapter implements LogDbOperateApi {
    /**
     * @var LogFileOperateApi
     */
    private $adaptee = null;

    public function __construct(LogFileOperateApi $api)
    {
        $this->adaptee = $api;
    }

    public function createLog(LogModel $logModel)
    {
        // TODO: Implement addLog() method.
        $this->adaptee->writeLogFile([$logModel]);
    }

    public function getAllLog()
    {
        // TODO: Implement getAllLog() method.
        return $this->adaptee->readLogFile();
    }
}