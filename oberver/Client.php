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
        $subject = new NewsPaper();

        foreach (['张三', '李四', '王五'] as $_key => $_name) {
            $var = "reader" . ($_key + 1);
            ${$var} = new Reader();

            $subject->attach(${$var});
        }

        $subject->setContent('本期内容是观察者模式');

        if (isset($reader2)) {
            $subject->detach($reader2);
        }

        $subject->setContent('又来了一份报纸');
    }
}

(new Client())->run();