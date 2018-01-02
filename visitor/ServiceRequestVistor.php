<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 16:33
 */
class ServiceRequestVistor implements Visitor {
    public function visitEnterpriseCustomer(EnterpriseCustomer $enterpriseCustomer)
    {
        // TODO: Implement visitEnterpriseCustomer() method.
        echo "企业" .$enterpriseCustomer->getName() . "提出服务请求\n";
    }

    public function visitPersonalCustomer(PersonalCustomer $personalCustomer)
    {
        // TODO: Implement visitPersonalCustomer() method.
        echo "客户" . $personalCustomer->getName() . "提出服务请求\n";
    }
}