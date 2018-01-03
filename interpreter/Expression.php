<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 15:02
 */
class Expression {
    private $context;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }
}