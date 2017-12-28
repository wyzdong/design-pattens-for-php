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
        $oa1 = new PersonalOrder();
        $oa1->setOrderProductNum(2048);
        $oa1->setCustomerName('张三');
        $oa1->setProductId('P0001');

        $oa2 = new EnterpriseOrder();
        $oa2->setOrderProductNum(20480);
        $oa2->setProductId('P0002');
        $oa2->setEnterpriseName('aliTaBa');

        $ob = new OrderBusiness();
        $ob->saveOrder($oa1);
        $ob->saveOrder($oa2);
    }
}

(new Client())->run();