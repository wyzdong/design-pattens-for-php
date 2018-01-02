<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 14:09
 */
class DepManager extends Handler {
    public  function handlerFeeRequest($user, $fee)
    {
        // TODO: Implement handlerFeeRequest() method.
        $str = "";
        if (bccomp($fee, 1000, 2) === -1) {
            if ($user == "小李") {
                $str .= "部门经理同意" . $user . "聚餐费用" . $fee . "元的请求";
            } else {
                $str .= "部门经理不同意" . $user . "聚餐费用" . $fee . "元的请求";
            }
            return $str . "\n";
        } else {
            if ($this->successor != null) {
                return $this->successor->handlerFeeRequest($user, $fee);
            }
        }
        return $str;
    }
}