<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 17:04
 */
abstract class LoginTemplate {
    final public function login(LoginModel $loginModel) {
        $dbLm = $this->findLoginUser($loginModel->getLoginId());
        if ($dbLm != null) {
            $encryptPwd = $this->encryptPwd($loginModel->getPassword());
            $loginModel->setPassword($encryptPwd);

            return $this->match($loginModel, $dbLm);
        }

        return false;
    }

    /**
     * @param $loginId
     * @return LoginModel
     */
    public abstract function findLoginUser($loginId);

    /**
     * @param $pwd
     * @return string
     */
    public function encryptPwd($pwd) {
        return md5($pwd);
    }

    public function match(LoginModel $lm, LoginModel $dbLm) {
        if ($lm->getLoginId() == $dbLm->getLoginId() && $lm->getPassword() == $dbLm->getPassword()) {
            return true;
        }
        return false;
     }
}