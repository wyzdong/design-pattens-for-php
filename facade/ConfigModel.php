<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 8:59
 */
class ConfigModel {
    /**
     * 是否需要生成表现层
     * @var bool
     */
    private $needGenPresentation = true;

    /**
     * 是否需要生成逻辑层
     * @var bool
     */
    private $needGenBusiness = true;

    /**
     * 是否需要生成数据层
     * @var bool
     */
    private $needGenDao = true;

    /**
     * @return bool
     */
    public function isNeedGenPresentation()
    {
        return $this->needGenPresentation;
    }

    /**
     * @param bool $needGenPresentation
     */
    public function setNeedGenPresentation($needGenPresentation)
    {
        $this->needGenPresentation = $needGenPresentation;
    }

    /**
     * @return bool
     */
    public function isNeedGenBusiness()
    {
        return $this->needGenBusiness;
    }

    /**
     * @param bool $needGenBusiness
     */
    public function setNeedGenBusiness($needGenBusiness)
    {
        $this->needGenBusiness = $needGenBusiness;
    }

    /**
     * @return bool
     */
    public function isNeedGenDao()
    {
        return $this->needGenDao;
    }

    /**
     * @param bool $needGenDao
     */
    public function setNeedGenDao($needGenDao)
    {
        $this->needGenDao = $needGenDao;
    }
}