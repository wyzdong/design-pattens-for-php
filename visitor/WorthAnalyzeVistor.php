<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 16:46
 */
class WorthAnalyzeVistor implements Visitor {
    public function visitEnterpriseCustomer(EnterpriseCustomer $enterpriseCustomer)
    {
        // TODO: Implement visitEnterpriseCustomer() method.
        echo "现在对企业客户" . $enterpriseCustomer->getName() . "进行价值分析\n";
    }

    public function visitPersonalCustomer(PersonalCustomer $personalCustomer)
    {
        // TODO: Implement visitPersonalCustomer() method.
        echo "现在对个人客户" . $personalCustomer->getName() . "进行价值分析\n";
    }
}