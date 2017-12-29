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
        $appConfig = AppConfig::getInstance();

        var_dump($appConfig->getParameterA());
        var_dump($appConfig->getParameterB());
        var_dump($appConfig->getReadDbConfig());
        var_dump($appConfig->getWriteDbConfig());
    }
}

(new Client())->run();