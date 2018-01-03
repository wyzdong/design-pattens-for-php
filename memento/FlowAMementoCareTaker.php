<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 11:25
 */
class FlowAMementoCareTaker {
    /**
     * @var FlowAMockMemento
     */
    private $memento = null;

    /**
     * @param FlowAMockMemento $memento
     */
    public function saveMemento($memento)
    {
        $this->memento = $memento;
    }

    public function retrieveMemento() {
        return $this->memento;
    }
}