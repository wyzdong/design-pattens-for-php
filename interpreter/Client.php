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
        foreach (['Chinese', 'English'] as $_lan) {
            $expression = new Expression();
            $expression->setContext([$_lan, 3, 2, 4, 4, 5]);
            $interpreter = new Interpreter($expression);
            $interpreter->execute();
        }
    }
}

(new Client())->run();