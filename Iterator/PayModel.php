<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 11:53
 */
class PayModel {
    /**
     * @var string
     */
    private $userName;

    /**
     * @var double
     */
    private $pay;

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return float
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * @param float $pay
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "userName=" . $this->userName . ",pay=" . $this->pay;
    }
}