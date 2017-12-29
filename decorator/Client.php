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
        $c1 = new ConcreteComponent();

        $d1 = new MonthPriceDecorator($c1);
        $d2 = new SumPriceDecorator($d1);

        $zs = $d2->calcPrice('张三', '', '');
        echo "=====张三应得奖金：" . $zs . "\n\n";

        $ls = $d2->calcPrice('李四', '', '');
        echo "=====李四应得奖金：" . $ls . "\n\n";

        $d3 = new GroupPriceDecorator($d2);
        $ww = $d3->calcPrice("王五", '', '');
        echo "=====王五应得奖金：" . $ww . "\n\n";
    }
}

(new Client())->run();