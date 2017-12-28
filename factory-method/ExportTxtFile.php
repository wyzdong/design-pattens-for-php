<?php
/**
 * 导出到txt文件
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 10:43
 */
class ExportTxtFile implements ExportFileApi {
    public function export($data)
    {
        // TODO: Implement export() method.

        echo "export " . $data . " into txt file \n";
        return true;
    }
}