<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 13:58
 */
class ArrayIteratorImpl implements MyIterator {
    /**
     * @var PayManager
     */
    private $aggregate = null;

    /**
     * @var int
     */
    private $index = -1;

    public function __construct(PayManager $payManager)
    {
        $this->aggregate = $payManager;
    }

    public function first()
    {
        // TODO: Implement first() method.
        $this->index = 0;
    }

    public function next()
    {
        // TODO: Implement next() method.
        if ($this->index < $this->aggregate->size()) {
            $this->index++;
        }
    }

    public function isDone()
    {
        // TODO: Implement isDone() method.
        if ($this->index == $this->aggregate->size()) {
            return true;
        }
        return false;
    }

    public function currentItem()
    {
        // TODO: Implement currentItem() method.

        return $this->aggregate->get($this->index);
    }
}