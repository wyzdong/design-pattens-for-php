<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:11
 */
class Dao {
    public function generate() {
        $cm = ConfigManager::getInstance()->getConfigModel();

        if ($cm->isNeedGenDao()) {
            echo "正在生成数据层代码文件\n";
        }
    }
}