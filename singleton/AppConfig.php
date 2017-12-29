<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 8:49
 */
class AppConfig {
    /**
     * @var AppConfig
     */
    private static $instance = null;

    private function __construct()
    {
        $this->readConfig();
    }

    /**
     * 配置文件中参数A的值
     * @var string
     */
    private $parameterA = '';

    /**
     * 配置文件中参数B的值
     * @var string
     */
    private $parameterB = '';

    /**
     * 写库
     * @var array
     */
    private $writeDbConfig = array();

    /**
     * 读库
     * @var array
     */
    private $readDbConfig = array();

    /**
     * @return string
     */
    public function getParameterA()
    {
        return $this->parameterA;
    }

    /**
     * @return string
     */
    public function getParameterB()
    {
        return $this->parameterB;
    }

    /**
     * @return array
     */
    public function getWriteDbConfig()
    {
        return $this->writeDbConfig;
    }

    /**
     * @return array
     */
    public function getReadDbConfig()
    {
        return $this->readDbConfig;
    }

    public static function getInstance() {
        /**
         * 1. 延迟加载的思想，用的时候才去判断，没有了创建一个
         * 2. 缓存思想，新建好实例，保存在静态属性中，起到的是缓存作用
         */
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function readConfig() {
        $config = @parse_ini_file('config.ini', true);
        if (false === $config) {
            throw new Exception('配置文件无法解析');
        }
        $this->parameterA = isset($config['parameter']['parameterA']) ? $config['parameter']['parameterA'] : '';
        $this->parameterA = isset($config['parameter']['parameterA']) ? $config['parameter']['parameterA'] : '';
        $this->writeDbConfig = isset($config['write_db']) ? $config['write_db'] : array();
        $this->readDbConfig = isset($config['read_db']) ? $config['read_db'] : array();
    }
}