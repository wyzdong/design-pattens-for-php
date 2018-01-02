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
        $mgr = SecurityMgr::getInstance();
        $mgr->login('张三');
        $mgr->login('李四');

        $f1 = $mgr->hasPermit("张三", "薪资数据", "查看");
        $f2 = $mgr->hasPermit("李四", "薪资数据", "查看");

        var_dump($f1, $f2);
    }
}

(new Client())->run();