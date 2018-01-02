<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 17:51
 */
interface Strategy {
    /**
     * @param $goodsPrice   double
     * @return double
     */
    public function calcPrice($goodsPrice);
}