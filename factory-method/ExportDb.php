<?php
/**
 * 导出到数据库
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 10:59
 */
class ExportDb implements ExportFileApi {
    public function export($data)
    {
        // TODO: Implement export() method.
        echo "export " . $data . " into database \n";
        return true;
    }
}