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
        $computerEngineer = new ComputerEngineer();

        $schema1 = new Schema2();

        $computerEngineer->makeComputer($schema1);
    }
}

(new Client())->run();