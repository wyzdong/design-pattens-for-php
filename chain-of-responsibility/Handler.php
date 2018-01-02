<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 14:00
 */
abstract class Handler {
    /**
     * @var Handler 持有下一个处理请求的对象
     */
    protected $successor = null;

    /**
     * @param Handler $successor
     */
    public function setSuccessor($successor)
    {
        $this->successor = $successor;
    }

    /**
     * 处理聚餐费用的申请
     * @param $user string  申请人
     * @param $fee  double  申请的钱数目
     * @return mixed        成功或失败的具体通知
     */
    public abstract function handlerFeeRequest($user, $fee);
}