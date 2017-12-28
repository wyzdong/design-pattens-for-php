<?php
/**
 * 描述输出数据的对象
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:21
 */
class ExportDataModel {
    /**
     * 产品编号
     * @var string
     */
    private $productId;

    /**
     * 销售价格
     * @var double
     */
    private $price;

    /**
     * 销售数量
     * @var double
     */
    private $amount;

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

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}