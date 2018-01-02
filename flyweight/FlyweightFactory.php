<?php
/**
 * 享元工厂
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:48
 */
class FlyweightFactory {
    /**
     * @var FlyweightFactory
     */
    private static $factory;

    private function __construct()
    {
    }

    /**
     * @return FlyweightFactory
     */
    public static function getInstance() {
        if (null === self::$factory) {
            self::$factory = new self();
        }
        return self::$factory;
    }

    /**
     * @var array
     */
    private $fsMap = [];

    /**
     * @param $key
     * @return AuthorizationFlyweight
     */
    public function getFlyWeight($key) {
        if (!isset($this->fsMap[$key])) {
            $f = new AuthorizationFlyweight($key);
            $this->fsMap[$key] = $f;
        } else {
            $f = $this->fsMap[$key];
        }
        return $f;
    }
}