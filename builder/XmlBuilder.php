<?php
/**
 * 导出到xml实例
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 13:46
 */
class XmlBuilder implements Builder {
    /**
     * @var string
     */
    private $buffer = '';

    public function buildHeader(ExportHeaderModel $headerModel)
    {
        // TODO: Implement buildHeader() method.
        $this->buffer .= "<?xml version='1.0'> encoding='UTF-8'?>\n";
        $this->buffer .= "<Report>\n";
        $this->buffer .= "  <Header>\n";
        $this->buffer .= "    <DeptId>{$headerModel->getDeptId()}</DeptId>\n";
        $this->buffer .= "    <ExportDate>{$headerModel->getExportDate()}</ExportDate>\n";
        $this->buffer .= "  </Header>\n";
    }

    public function buildBody(array $exportData)
    {
        // TODO: Implement buildBody() method.
        $this->buffer .= "  <Body>\n";
        foreach ($exportData as $table => $data) {
            $this->buffer .= "      <Datas TableName='" . $table . "'>\n";
            if (!is_array($data)) {
                throw new Exception('数据格式错误');
            }
            foreach ($data as $exportDataModel) {
                $this->buffer .= "          <Data>\n";
                if (!$exportDataModel instanceof ExportDataModel) {
                    throw new Exception('数据格式错误');
                }
                $this->buffer .= "                <PreoductId>{$exportDataModel->getProductId()}</PreoductId>\n";
                $this->buffer .= "                <Price>{$exportDataModel->getPrice()}</Price>\n";
                $this->buffer .= "                <Amount>{$exportDataModel->getAmount()}</Amount>\n";
                $this->buffer .= "          </Data>\n";
            }
            $this->buffer .= "      </Datas>\n";
        }
        $this->buffer .= "  </Body>\n";
    }

    public function buildFooter(ExportFooterModel $footerModel)
    {
        // TODO: Implement buildFooter() method.
        $this->buffer .= "  <Footer>\n";
        $this->buffer .= "      <ExportUser>{$footerModel->getExportUser()}</ExportUser>\n";
        $this->buffer .= "  </Footer>\n";
        $this->buffer .= "</Report>\n";
    }

    public function getResult() {
        return $this->buffer;
    }
}