<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:10
 */
class Bussiness {
    public function generate() {
        $cm = ConfigManager::getInstance()->getConfigModel();

        if ($cm->isNeedGenBusiness()) {
            echo "正在生成业务层代码文件\n";
        }
    }
}