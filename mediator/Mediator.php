<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:26
 */
interface Mediator {
    public function changed(Colleague $colleague);
}