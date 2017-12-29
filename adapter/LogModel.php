<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 9:40
 */
class LogModel {
    /**
     * 日志编号
     * @var string
     */
    private $logId = '';

    /**
     * 操作人员
     * @var string
     */
    private $operateUser = '';

    /**
     * 操作时间
     * @var string
     */
    private $operateTime = '';

    /**
     * 日志内容
     * @var string
     */
    private $logContent = '';

    /**
     * @param string $logId
     */
    public function setLogId($logId)
    {
        $this->logId = $logId;
    }

    /**
     * @return string
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * @param string $operateUser
     */
    public function setOperateUser($operateUser)
    {
        $this->operateUser = $operateUser;
    }

    /**
     * @return string
     */
    public function getOperateUser()
    {
        return $this->operateUser;
    }

    /**
     * @param string $operateTime
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
    }

    /**
     * @return string
     */
    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * @param string $logContent
     */
    public function setLogContent($logContent)
    {
        $this->logContent = $logContent;
    }

    /**
     * @return string
     */
    public function getLogContent()
    {
        return $this->logContent;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "{$this->logId},{$this->operateUser},{$this->operateTime},{$this->logContent}\r\n";
    }
}