<?php
/**
 * 描述输出到文件尾部的对象
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:21
 */
class ExportFooterModel {
    /**
     * 导出人
     * @var string
     */
    private $exportUser;

    /**
     * @param string $exportUser
     */
    public function setExportUser($exportUser)
    {
        $this->exportUser = $exportUser;
    }

    /**
     * @return string
     */
    public function getExportUser()
    {
        return $this->exportUser;
    }
}