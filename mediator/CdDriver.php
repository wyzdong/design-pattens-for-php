<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:28
 */
class CdDriver extends Colleague {
    /**
     * @var string
     */
    private $data;

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    public function readCd() {
        $this->data = "设计模式,值得好好研究";
        $this->getMediator()->changed($this);
    }
}