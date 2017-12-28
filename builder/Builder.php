<?php
/**
 * 生成器接口，定义创建一个输出文件对象所需的各个部件的操作
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:16
 */
interface Builder{
    public function buildHeader(ExportHeaderModel $headerModel);

    public function buildBody(array $exportData);

    public function buildFooter(ExportFooterModel $footerModel);
}