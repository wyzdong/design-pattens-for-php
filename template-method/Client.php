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
        $lm1 = new LoginModel();
        $lm1->setLoginId("admin");
        $lm1->setPassword("workerpwd");

        $lt1 = new NormalLogin();
        var_dump($lt1->login($lm1));

        $lm2 = new LoginModel();
        $lm2->setLoginId("admin");
        $lm2->setPassword("workerpwd");
        $lt2 = new WorkerLogin();
        var_dump($lt2->login($lm2));
    }
}

(new Client())->run();