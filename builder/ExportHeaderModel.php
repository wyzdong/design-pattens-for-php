<?php
/**
 * 描述输出到文件头的内容的对象
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:19
 */
class ExportHeaderModel {
    /**
     * 分公司或门市点编号
     * @var string
     */
    private $deptId;

    /**
     * 导出日期
     * @var string
     */
    private $exportDate;

    /**
     * @return string
     */
    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * @param string $deptId
     */
    public function setDeptId($deptId)
    {
        $this->deptId = $deptId;
    }

    /**
     * @return string
     */
    public function getExportDate()
    {
        return $this->exportDate;
    }

    /**
     * @param string $exportDate
     */
    public function setExportDate($exportDate)
    {
        $this->exportDate = $exportDate;
    }
}