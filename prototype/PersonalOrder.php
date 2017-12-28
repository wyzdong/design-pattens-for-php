<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 17:02
 */
class PersonalOrder implements OrderApi {
    /**
     * @var string
     */
    private $customerName = '';

    /**
     * @var string
     */
    private $productId = '';

    /**
     * @var int
     */
    private $orderProductNum = 0;

    public function setOrderProductNum($num)
    {
        // TODO: Implement setOrderProductNum() method.
        $this->orderProductNum = $num;
    }

    public function getOrderProductNum()
    {
        // TODO: Implement getOrderProductNum() method.
        return $this->orderProductNum;
    }

    /**
     * @param string $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return '本个人订单的订购人是=' . $this->customerName . ', 订购的产品是=' . $this->productId . ', 订购数量为=' . $this->orderProductNum;
    }

    public function cloneOrder()
    {
        // TODO: Implement cloneOrder() method.
        return clone $this;
    }
}