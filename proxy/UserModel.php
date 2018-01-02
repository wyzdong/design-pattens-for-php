<?php
/**
 * 描述用户数据的模型
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 11:00
 */
class UserModel implements UserModelApi {
    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $deptId;

    /**
     * @var string
     */
    private $sex;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * @param string $deptId
     */
    public function setDeptId($deptId)
    {
        $this->deptId = $deptId;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "userId={$this->userId},name={$this->name},deptId={$this->deptId},sex={$this->sex}";
    }
}