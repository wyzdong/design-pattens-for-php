<?php
/**
 * 导出到txt文件操作
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:03
 */
class ExportTxtFileOperate extends ExportOperate {
    public  function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        return new ExportTxtFile();
    }
}