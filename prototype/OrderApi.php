<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 16:43
 */
interface OrderApi {
    public function getOrderProductNum();

    public function setOrderProductNum($num);

    /**
     * @return OrderApi
     */
    public function cloneOrder();

    public function __toString();
}