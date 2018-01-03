<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 12:00
 */
class SalaryManager extends MyAggregate {
    /**
     * @var SplDoublyLinkedList
     */
    private $list = null;

    /**
     * @return SplDoublyLinkedList
     */
    public function getPayList()
    {
        return $this->list;
    }

    public function calcPay() {
        $pm1 = new PayModel();
        $pm1->setUserName("王五");
        $pm1->setPay(2200);

        $pm2 = new PayModel();
        $pm2->setUserName("赵六");
        $pm2->setPay(3600);

        $this->list = new SplDoublyLinkedList();

        $this->list->push($pm1);
        $this->list->push($pm2);
    }

    public  function createIterator()
    {
        // TODO: Implement createIterator() method.
        return new ListIteratorImpl($this);
    }

    public function get($index) {
        if ($index < $this->size()) {
            return $this->list->offsetGet($index);
        }
        return null;
    }

    public function size() {
        return $this->list->count();
    }
}