<?php
/**
 * 描述授权数据的模型
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 9:26
 */
class AuthorizationModel {
    /**
     * @var string 人员
     */
    private $user;

    /**
     * @var string 安全实体
     */
    private $securityEntity;

    /**
     * @var string 权限
     */
    private $permit;

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getSecurityEntity()
    {
        return $this->securityEntity;
    }

    /**
     * @param string $securityEntity
     */
    public function setSecurityEntity($securityEntity)
    {
        $this->securityEntity = $securityEntity;
    }

    /**
     * @return string
     */
    public function getPermit()
    {
        return $this->permit;
    }

    /**
     * @param string $permit
     */
    public function setPermit($permit)
    {
        $this->permit = $permit;
    }
}