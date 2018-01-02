<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 14:51
 */
class GigaMainBoard implements MainBoardApi2 {
    public function open()
    {
        // TODO: Implement open() method.
        echo <<<COMMOND
技嘉主板现在正在开机，请稍候
接通电源……
设备检查……
装载系统……
机器正常运转起来……
机器已经正常打开，请操作\n
COMMOND;
    }

    public function reset()
    {
        // TODO: Implement reset() method.
        echo <<<COMMOND
技嘉主板正在重新启动机器，请稍候
机器已经正常打开，请操作\n
COMMOND;
    }
}