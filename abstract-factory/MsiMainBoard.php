<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 9:35
 */
class MsiMainBoard implements MainBoardApi {
    private $cupHoles = 0;

    public function __construct($cupHoles)
    {
        $this->cupHoles = $cupHoles;
    }

    public function installCpu()
    {
        // TODO: Implement installCpu() method.
        echo 'now is MSI MainBoard, cpuHoles is ' . $this->cupHoles . "\n";
    }
}