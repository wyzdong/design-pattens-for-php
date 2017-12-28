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
        // 头
        $headerModel = new ExportHeaderModel();
        $headerModel->setDeptId('一分公司');
        $headerModel->setExportDate(date("Y-m-d"));

        // 体
        $exportDataCol1 = [];

        $em1 = new ExportDataModel();
        $em1->setProductId('产品 001 号');
        $em1->setPrice(100);
        $em1->setAmount(80);
        $exportDataCol1[] = $em1;

        $em2 = new ExportDataModel();
        $em2->setProductId('产品 002 号');
        $em2->setPrice(99);
        $em2->setAmount(55);
        $exportDataCol1[] = $em2;

        $exportData = array();
        $exportData['销售记录表'] = $exportDataCol1;

        // 尾
        $footerModel = new ExportFooterModel();
        $footerModel->setExportUser('张三');

        $txtBuilder = new TxtBuilder();
        $director = new Director($txtBuilder);
        $director->construct($headerModel, $exportData, $footerModel);

        $xmlBuilder = new XmlBuilder();
        $director2 = new Director($xmlBuilder);
        $director2->construct($headerModel, $exportData, $footerModel);
        
        echo $xmlBuilder->getResult();
    }
}

(new Client())->run();