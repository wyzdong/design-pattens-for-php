<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 17:25
 */
class EnterpriseOrder implements OrderApi {
    /**
     * @var string
     */
    private $enterpriseName = '';

    /**
     * @var string
     */
    private $productId = '';

    /**
     * @var int
     */
    private $orderProductNum = 0;

    /**
     * @return string
     */
    public function getEnterpriseName()
    {
        return $this->enterpriseName;
    }

    /**
     * @param string $enterpriseName
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->enterpriseName = $enterpriseName;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getOrderProductNum()
    {
        // TODO: Implement getOrderProductNum() method.
        return $this->orderProductNum;
    }

    public function setOrderProductNum($num)
    {
        // TODO: Implement setOrderProductNum() method.
        $this->orderProductNum = $num;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return '本企业订单的订购企业是=' . $this->enterpriseName . ', 订购的产品是=' . $this->productId . ', 订购的数量为=' . $this->orderProductNum;
    }

    public function cloneOrder()
    {
        // TODO: Implement cloneOrder() method.
        return clone $this;
    }
}