<?php
/**
 * 导出到Excel操作
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:04
 */
class ExportExcelOperate extends ExportOperate {
    public  function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        return new ExportExcel();
    }
}