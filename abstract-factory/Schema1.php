<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 9:36
 */
class Schema1 implements AbstractFactory {
    public function createCpuApi()
    {
        // TODO: Implement createCpuApi() method.
        return new InterCpu(1156);
    }

    public function createMainBoardApi()
    {
        // TODO: Implement createMainBoardApi() method.
        return new GaMainBoard(1156);
    }
}