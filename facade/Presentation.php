<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:07
 */
class Presentation {
    public function generate() {
        $cm = ConfigManager::getInstance()->getConfigModel();

        if ($cm->isNeedGenPresentation()) {
            echo "正在生成表现层代码文件\n";
        }
    }
}