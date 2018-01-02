<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 18:00
 */
class LargeCustomerStrategy implements Strategy {
    public function calcPrice($goodsPrice)
    {
        // TODO: Implement calcPrice() method.
        echo "大客户统一折扣10%\n";
        return bcmul($goodsPrice, (1 - 0.1), 2);
    }
}