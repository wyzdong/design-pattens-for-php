<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 18:00
 */
class Price {
    /**
     * @var Strategy
     */
    private $strategy = null;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function quote($goodsPrice) {
        return $this->strategy->calcPrice($goodsPrice);
    }
}