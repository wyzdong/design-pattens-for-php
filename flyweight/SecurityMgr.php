<?php
/**
 * 安全管理
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:56
 */
class SecurityMgr {
    /**
     * @var SecurityMgr
     */
    private static $securityMgr = null;

    private function __construct()
    {
    }

    public static function getInstance() {
        if (null === self::$securityMgr) {
            self::$securityMgr = new self();
        }

        return self::$securityMgr;
    }

    /**
     * 存放登陆人员对应的权限
     * @var array
     */
    private $map = [];


    public function login($user) {
        $col = $this->queryByUser($user);
        $this->map[$user] = $col;
    }

    /**
     * 判断用户对某个安全实体是否拥有某种权限
     * @param $user  string 被检测权限的用户
     * @param $securityEntity   string 安全实体
     * @param $permit string  权限
     * @return bool
     * @throws Exception
     */
    public function hasPermit($user, $securityEntity, $permit) {
        $col = $this->map[$user];
        if ($col === null) {
            echo $user . "没有登录货色没有被分配任何权限\n";
            return false;
        }

        foreach ($col as $fm) {
            if (!$fm instanceof AuthorizationFlyweight) {
                throw new Exception('');
            }
            if ($fm->match($securityEntity, $permit)) {
                return true;
            }
        }

        return false;
    }

    /**
     * 从数据库获取某人具有的权限
     * @param $user
     * @return array
     */
    private function queryByUser($user) {
        $col = [];
        foreach (Db::$colDb as $s) {
            $ss = explode(',', $s);
            if ($ss[0] == $user) {
                $fm = FlyweightFactory::getInstance()->getFlyWeight($ss[1] . ',' . $ss[2]);
                $col[] = $fm;
            }
        }
        return $col;
    }
}