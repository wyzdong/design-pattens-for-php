<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:15
 */
class Facade {
    public function generate() {
        (new Presentation())->generate();
        (new Bussiness())->generate();
        (new Dao())->generate();
    }
}