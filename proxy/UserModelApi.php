<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 11:24
 */
interface UserModelApi {
    public function getUserId();
    public function setUserId($userId);

    public function getName();
    public function setName($name);

    public function getDeptId();
    public function setDeptId($deptId);

    public function getSex();
    public function setSex($sex);
}