<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 9:37
 */
class Schema2 implements AbstractFactory {
    public function createCpuApi()
    {
        // TODO: Implement createCpuApi() method.
        return new AmdCpu(939);
    }

    public function createMainBoardApi()
    {
        // TODO: Implement createMainBoardApi() method.
        return new MsiMainBoard(939);
    }
}