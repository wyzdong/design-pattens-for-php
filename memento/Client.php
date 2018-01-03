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
        $mock = new FlowAMock("TestFlow");
        // 运行流程的第一个阶段
        $mock->runPhaseOne();

        // 创建管理者
        $careTaker = new FlowAMementoCareTaker();

        // 创建此时对象的备忘录对象，并保存到管理者对象那里。后面要用到的时候从这里拿
        $memento = $mock->createMemento();
        $careTaker->saveMemento($memento);

        // 按照方案1来运行流程的后半部分
        $mock->schema1();

        // 从管理者对象里面获取备忘录对象，然后设置回去
        // 让模拟运行流程的对象自己恢复到自己的内部状态
        $mock->setMemnto($careTaker->retrieveMemento());

        // 运行流程的后半部分
        $mock->schema2();
    }
}

(new Client())->run();