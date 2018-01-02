<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 15:57
 */
interface Visitor {
    public function visitEnterpriseCustomer(EnterpriseCustomer $enterpriseCustomer);

    public function visitPersonalCustomer(PersonalCustomer $personalCustomer);
}