<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:03
 */
class ConfigManager {
    /**
     * @var ConfigManager
     */
    private static $configManager = null;

    /**
     * @var ConfigModel
     */
    private static $configModel = null;

    private function __construct()
    {
    }

    /**
     * @return ConfigManager
     */
    public static function getInstance() {
        if (null == self::$configManager) {
            self::$configManager = new self();
            self::$configModel = new ConfigModel();
        }

        return self::$configManager;
    }

    /**
     * @return ConfigModel
     */
    public function getConfigModel()
    {
        return self::$configModel;
    }
}