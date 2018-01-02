<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:44
 */
class AuthorizationFlyweight implements Flyweight {
    /**
     * @var string
     */
    private $securityEntity;

    /**
     * @var string
     */
    private $permit;

    public function __construct($state)
    {
        $ss = explode(',',$state);

        $this->securityEntity = $ss[0];
        $this->permit = $ss[1];
    }

    /**
     * @return string
     */
    public function getSecurityEntity()
    {
        return $this->securityEntity;
    }

    /**
     * @return string
     */
    public function getPermit()
    {
        return $this->permit;
    }

    public function match($securityEntity, $permit)
    {
        // TODO: Implement match() method.
        if ($this->securityEntity == $securityEntity && $this->permit == $permit) {
            return true;
        }
        return false;
    }

    public function __toString() {
        return $this->securityEntity . "," . $this->permit;
    }
}