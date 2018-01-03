<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 11:16
 */
class MementoImpl implements FlowAMockMemento {
    /**
     * @var int
     */
    private $tempResult;

    /**
     * @var string
     */
    private $tempState;

    public function __construct($tempResult, $tempState)
    {
        $this->tempResult = $tempResult;
        $this->tempState = $tempState;
    }

    /**
     * @return int
     */
    public function getTempResult()
    {
        return $this->tempResult;
    }

    /**
     * @return string
     */
    public function getTempState()
    {
        return $this->tempState;
    }
}