<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 11:08
 */
class UserManager {
    public function getUserByDeptId($deptId) {
        $col = array();

        foreach (TestDb::$users as $user) {

            if (preg_match("/^{$deptId}/", $user['deptId'])) {
                // $userModel = new UserModel();
                // $userModel->setUserId($user['userId']);
                // $userModel->setName($user['name']);
                // $userModel->setDeptId($user['deptId']);
                // $userModel->setSex($user['sex']);

                $proxy = new Proxy(new UserModel());
                $proxy->setUserId($user['userId']);
                $proxy->setName($user['name']);

                $col[] = $proxy;
            }
        }

        return $col;
    }
}