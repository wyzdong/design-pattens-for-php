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
        foreach ([NormalCustomerStrategy::class, OldCustomerStrategy::class, LargeCustomerStrategy::class] as $class) {
            $strategy = new $class();
            if ($strategy instanceof Strategy) {
                $context = new Price($strategy);
                echo "报价为：" . $context->quote(1000) . "\n\n";
            }
        }
    }
}

(new Client())->run();