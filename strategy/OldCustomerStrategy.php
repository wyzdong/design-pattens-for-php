<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 17:57
 */
class OldCustomerStrategy implements Strategy {
    public function calcPrice($goodsPrice)
    {
        // TODO: Implement calcPrice() method.
        echo "老客户统一折扣5%\n";
        return bcmul($goodsPrice, (1 - 0.05), 2);
    }
}