<?php
function __autoload($className) {
    $fileName = __DIR__ . '/' .$className . ".php";
    if (file_exists($fileName)) {
        require $fileName;
    } else {
        throw new Exception($className . ' not exist');
    }
}
class Client {
    public function run() {
        $os = new ObjectStructure();

        $cm1 = new EnterpriseCustomer();
        $cm1->setName("ABC集团");
        $os->addElement($cm1);

        $cm2 = new EnterpriseCustomer();
        $cm2->setName("CED公司");
        $os->addElement($cm2);

        $cm3 = new PersonalCustomer();
        $cm3->setName("张三");
        $os->addElement($cm3);

        $srVisitor = new ServiceRequestVistor();
        $os->handlerRequest($srVisitor);

        $paVisitor = new PredilectionAnalyzeVisitor();
        $os->handlerRequest($paVisitor);

        $waVisitor = new WorthAnalyzeVistor();
        $os->handlerRequest($waVisitor);
    }
}

(new Client())->run();