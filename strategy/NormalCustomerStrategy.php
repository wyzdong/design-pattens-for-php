<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 17:56
 */
class NormalCustomerStrategy implements Strategy {
    public function calcPrice($goodsPrice)
    {
        // TODO: Implement calcPrice() method.
        echo "普通客户和新客户没有折扣\n";
        return $goodsPrice;
    }
}