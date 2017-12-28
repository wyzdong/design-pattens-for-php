<?php
/**
 * inter CPU
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 9:28
 */
class InterCpu implements CpuApi {
    private $pains = 0;

    public function __construct($pains)
    {
        $this->pains = $pains;
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
        echo 'now is inter cpu, pains is ' . $this->pains . "\n";
    }
}