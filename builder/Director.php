<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 11:49
 */
class Director {
    /**
     * @var Builder
     */
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct(ExportHeaderModel $headerModel, array $dataModel, ExportFooterModel $footerModel) {
        $this->builder->buildHeader($headerModel);

        $this->builder->buildBody($dataModel);

        $this->builder->buildFooter($footerModel);
    }
}