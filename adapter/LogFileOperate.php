<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 9:49
 */
class LogFileOperate implements LogFileOperateApi {

    private $logFilePathName = 'myLog.log';

    public function __construct($logFilePathName = null)
    {
        if (!is_null($logFilePathName) && strlen(trim($logFilePathName))) {
            $this->logFilePathName = $logFilePathName;
        }
    }

    /**
     * @return Generator
     * @throws Exception
     */
    public function readLogFile()
    {
        // TODO: Implement readLogFile() method.
        $handler = @fopen($this->logFilePathName, 'r');
        if (false === $handler) {
            throw new Exception('打开日志文件失败');
        }
        while ($line = fgets($handler)) {
            $logInfo = explode(',', $line);

            $logModel = new LogModel();
            $logModel->setLogId($logInfo[0]);
            $logModel->setOperateUser($logInfo[1]);
            $logModel->setOperateTime($logInfo[2]);
            $logModel->setLogContent($logInfo[3]);

            yield $logModel;
        }
        fclose($handler);
    }

    public function writeLogFile(array $list)
    {
        // TODO: Implement writeLogFile() method.
        if (!$list) {
            throw new Exception('写入日志的内容不能为空');
        }

        $handler = @fopen($this->logFilePathName, 'a');
        if (false === $handler) {
            throw new Exception('打开日志写入文件失败');
        }

        try {
            foreach ($list as $logModel) {
                if (!$logModel instanceof LogModel) {
                    throw new Exception('日志格式错误');
                }
                if (false === fwrite($handler, $logModel)) {
                    throw new Exception('文件写入失败');
                }
            }
            fclose($handler);
        } catch (Exception $exception) {
            fclose($handler);
            throw $exception;
        }
    }
}