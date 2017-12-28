<?php
/**
 * 导出到数据库操作
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:01
 */
class ExportDbOperate extends ExportOperate {
    public  function factoryMethod()
    {
        // TODO: Implement facotryMethod() method.
        return new ExportDb();
    }
}