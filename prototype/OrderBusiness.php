<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 17:33
 */
class OrderBusiness {
    public function saveOrder(OrderApi $order) {
        while ($order->getOrderProductNum() > 1000) {

            // 体验在这里，克隆一个原来的对象，生成一个新的订单，将原来的总数减去1000
            $newOrder = $order->cloneOrder(); // 等于 $newOrder = clone $order;
            $newOrder->setOrderProductNum(1000);

            $order->setOrderProductNum($order->getOrderProductNum() - 1000);

            echo '拆分生成新订单 == ' . $newOrder . "\n";
        }

        echo '          订单 == ' . $order . "\n";
    }
}