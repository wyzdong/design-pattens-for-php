<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 11:07
 */
class FlowAMock {
    /**
     * 流程名称
     * @var string
     */
    private $flowName;

    /**
     * 代指某个中间结果
     * @var int
     */
    private $tempResult;

    /**
     * 代指某个中间结果
     * @var string
     */
    private $tempState;

    /**
     * FlowAMock constructor.
     * @param string $flowName
     */
    public function __construct($flowName)
    {
        $this->flowName = $flowName;
    }

    /**
     * 运行流程的第一阶段
     */
    public function runPhaseOne() {
        $this->tempResult = 3;
        $this->tempState = "PhaseOne";
    }

    /**
     * 方案1运行流程后半部分
     */
    public function schema1() {
        $this->tempState .= ",Schema1";
        echo $this->tempState . " : now run " . $this->tempResult . "\n";
        $this->tempResult += 11;
    }

    /**
     * 方案2运行流程后半部分
     */
    public function schema2() {
        $this->tempState .= ",Schema2";
        echo $this->tempState . " : now run " . $this->tempResult . "\n";
        $this->tempResult += 22;
    }

    /**
     * @return MementoImpl
     */
    public function createMemento() {
        return new MementoImpl($this->tempResult, $this->tempState);
    }

    public function setMemnto(FlowAMockMemento $memento) {
        if ($memento instanceof MementoImpl) {
            $this->tempResult = $memento->getTempResult();
            $this->tempState = $memento->getTempState();
        }
    }
}