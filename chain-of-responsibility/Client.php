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
        $handler1 = new ProjectManager();
        $handler2 = new DepManager();
        $handler3 = new GeneralManager();

        $handler1->setSuccessor($handler2);
        $handler2->setSuccessor($handler3);

        foreach ([300, 600, 1200] as $fee) {
            echo $handler1->handlerFeeRequest("小李", $fee);
            echo $handler1->handlerFeeRequest("小张", $fee);
        }
    }
}

(new Client())->run();