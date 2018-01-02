<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 11:27
 */
class Proxy implements UserModelApi {
    /**
     * @var UserModel
     */
    private $realSubject = null;

    public function __construct(UserModel $userModel)
    {
        $this->realSubject = $userModel;
    }

    /**
     * @var bool
     */
    private $loaded = false;

    public function getUserId()
    {
        // TODO: Implement getUserId() method.
        return $this->realSubject->getUserId();
    }

    public function setUserId($userId)
    {
        // TODO: Implement setUserId() method.
        $this->realSubject->setUserId($userId);
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->realSubject->getName();
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->realSubject->setName($name);
    }

    public function setDeptId($deptId)
    {
        // TODO: Implement setDeptId() method.
        $this->realSubject->setDeptId($deptId);
    }

    public function setSex($sex)
    {
        // TODO: Implement setSex() method.
        $this->realSubject->setSex($sex);
    }

    public function getDeptId()
    {
        // TODO: Implement getDeptId() method.
        if (false === $this->loaded) {
            $this->reload();
            $this->loaded = true;
        }
        return $this->realSubject->getDeptId();
    }

    public function getSex()
    {
        // TODO: Implement getSex() method.
        if (false === $this->loaded) {
            $this->reload();
            $this->loaded = true;
        }
        return $this->realSubject->getSex();
    }

    private function reload() {
        echo "重新查询获取完整的用户信息\n";

        foreach (TestDb::$users as $user) {
            if ($user['userId'] == $this->realSubject->getUserId()) {
                $this->realSubject->setSex($user['sex']);
                $this->realSubject->setDeptId($user['deptId']);
                break;
            }
        }
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "userId={$this->getUserId()},name={$this->getName()},deptId={$this->getDeptId()},sex={$this->getSex()}";
    }
}