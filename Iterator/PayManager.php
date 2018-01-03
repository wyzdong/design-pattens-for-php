<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 11:55
 */
class PayManager extends MyAggregate {
    /**
     * @var array
     */
    private $list = [];

    /**
     * @return array
     */
    public function getPayList()
    {
        return $this->list;
    }

    public function calcPay() {
        $pm1 = new PayModel();
        $pm1->setUserName("张三");
        $pm1->setPay(3800);

        $pm2 = new PayModel();
        $pm2->setUserName("李四");
        $pm2->setPay(5800);

        $this->list[] = $pm1;
        $this->list[] = $pm2;
    }

    public function createIterator()
    {
        // TODO: Implement createIterator() method.
        return new ArrayIteratorImpl($this);
    }

    public function get($index) {
        if ($index < $this->size()) {
            return $this->list[$index];
        }
        return null;
    }

    public function size() {
        return count($this->list);
    }
}