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
        $payManager = new PayManager();
        $payManager->calcPay();
        echo "集团工资列表: \n";
        $this->test($payManager->createIterator());
//        $this->test2($payManager->getPayList());

        $salaryManager = new SalaryManager();
        $salaryManager->calcPay();
        echo "新收购的公司工资列表: \n";
        $this->test($salaryManager->createIterator());
//        $this->test2($salaryManager->getPayList());
    }

    private function test(MyIterator $iterator) {
        $iterator->first();

        while (!$iterator->isDone()) {
            $obj = $iterator->currentItem();

            echo $obj . "\n";
            $iterator->next();
        }
    }

    private function test2($iterator) {
        foreach ($iterator as $item) {
            echo $item . "\n";
        }
    }
}

(new Client())->run();