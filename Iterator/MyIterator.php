<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 13:56
 */
interface MyIterator {
    public function first();

    public function next();

    public function isDone();

    public function currentItem();
}