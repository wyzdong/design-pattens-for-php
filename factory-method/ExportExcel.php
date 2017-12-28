<?php
/**
 * 导出到Excel
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:00
 */
class ExportExcel implements ExportFileApi {
    public function export($data)
    {
        // TODO: Implement export() method.
        echo "export " . $data . " into excel \n";
        return true;
    }
}