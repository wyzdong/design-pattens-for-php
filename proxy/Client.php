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
        $userManager = new UserManager();
        $cols = $userManager->getUserByDeptId('0101');

        foreach ($cols as $col) {
            if ($col instanceof Proxy) {
                echo "用户编号：" . $col->getUserId() .
                    "，用户姓名：" . $col->getName() . "\n";
            }
        }

        foreach ($cols as $col) {
            if ($col instanceof Proxy) {
                echo "用户编号：" . $col->getUserId() .
                    "，用户姓名：" . $col->getName() .
                    "，用户部门：" . $col->getDeptId() .
                    "，用户性别：" . $col->getSex() . "\n";
            }
        }

        foreach ($cols as $col) {
            if ($col instanceof Proxy) {
                echo "用户编号：" . $col->getUserId() .
                    "，用户姓名：" . $col->getName() .
                    "，用户性别：" . $col->getSex() . "\n";
            }
        }
    }
}

(new Client())->run();