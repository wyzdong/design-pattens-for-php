<?php
function __autoload($className) {
    $fileName = __DIR__ . '/' .$className . ".php";
    if (file_exists($fileName)) {
        require $fileName;
    } else {
        throw new Exception($className . ' not exist');
    }
}
class Client {
    public function run() {
        // 对应第一版
        $logFileOperate = new LogFileOperate();

        // 适配器，实现了第二版的接口，持有第一版的对象
        $api = new Adapter($logFileOperate);

        $logDbOperate = new LogDbOperate();
        $logData = $this->getLogData(10);

        // 写入
        try {
            $logDbOperate->createLog($logData);
        } catch (Exception $exception1) {
            echo $exception1->getMessage() . ", 改为写入文件\n";
            $api->createLog($logData);
        }

        // 读取
        try {
            $logDbOperate->getAllLog();
        } catch (Exception $exception2) {
            echo $exception2->getMessage() . ", 改为从文件中获取\n";
            foreach ($api->getAllLog() as $data) {
                if ($data instanceof LogModel) {
                    echo $data;
                }
            }
        }
    }

    /**
     * @return array
     */
    private function getWriteLogData() {
        $logData = [];
        $i = 0;
        while ($i < 5) {
            $logData[] = $this->getLogData($i);
            $i++;
        }

        return $logData;
    }

    private function getLogData($i) {
        $lm1 = new LogModel();
        $lm1->setLogId('00' . $i);
        $lm1->setOperateUser('admin' . $i);
        $lm1->setOperateTime(date('Y-m-d H:i:s'));
        $lm1->setLogContent('这是一个测试' . $i);

        return $lm1;
    }
}

(new Client())->run();