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
        $data = 'aaa';

        foreach ([new ExportTxtFileOperate(), new ExportDbOperate(), new ExportExcelOperate()] as $opreate) {
            $opreate->export($data);
        }
    }
}

(new Client())->run();