<?php
/**
 * 导出到文本文件实例
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:34
 */
class TxtBuilder implements Builder {
    /**
     * @var string
     */
    private $buffer = '';

    public function buildHeader(ExportHeaderModel $headerModel)
    {
        // TODO: Implement buildHeader() method.
        $this->buffer .= $headerModel->getDeptId() . ',' . $headerModel->getExportDate() . "\n";
    }

    public function buildBody(array $exportData)
    {
        // TODO: Implement buildBody() method.
        foreach ($exportData as $table => $data) {
            $this->buffer .= $table . "\n";
            if (!is_array($data)) {
                throw new Exception('数据格式错误');
            }
            foreach ($data as $exportDataModel) {
                if (!$exportDataModel instanceof ExportDataModel) {
                    throw new Exception('数据格式错误');
                }
                $this->buffer .= $exportDataModel->getProductId() . ',' . $exportDataModel->getPrice() . ',' . $exportDataModel->getAmount() . "\n";
            }
        }
    }

    public function buildFooter(ExportFooterModel $footerModel)
    {
        // TODO: Implement buildFooter() method.
        $this->buffer .= $footerModel->getExportUser();
    }

    public function getResult() {
        return $this->buffer;
    }
}