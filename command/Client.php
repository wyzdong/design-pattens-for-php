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
        $mainBoard = new GigaMainBoard();
        $openCommand = new OpenCommand($mainBoard);
        $resetCommand = new ResetCommand($mainBoard);

        $box = new Box();
        // 设置开机命令
        $box->setOpenCommand($openCommand);
        // 设置重启命令
        $box->setResetCommand($resetCommand);

        echo "按下开机按钮：\n";
        $box->openButtonPressed();
        echo "按下重启按钮：\n";
        $box->resetButtonPressed();
    }
}

(new Client())->run();