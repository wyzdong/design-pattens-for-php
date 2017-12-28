<?php
/**
 * AMD CPU
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 9:30
 */
class AmdCpu implements CpuApi {
    private $pains = 0;

    public function __construct($pains)
    {
        $this->pains = $pains;
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
        echo 'now is amd cpu, pains is ' . $this->pains . "\n";
    }
}