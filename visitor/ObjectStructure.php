<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 16:38
 */
class ObjectStructure {
    /**
     * @var array
     */
    private $col = [];

    public function handlerRequest(Visitor $visitor) {
        foreach ($this->col as $cm) {
            if (!$cm instanceof Customer) {
                throw new Exception("客户不合法");
            }
            $cm->accept($visitor);
        }
    }

    public function addElement(Customer $customer) {
        $this->col[] = $customer;
    }
}