<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 17:13
 */
class NormalLogin extends LoginTemplate {
    /**
     * @param $loginId
     * @return LoginModel
     */
    public  function findLoginUser($loginId)
    {
        // TODO: Implement findLoginUser() method.
        $lm = new LoginModel();
        $lm->setLoginId($loginId);
        $lm->setPassword($this->encryptPwd("workerpwd"));

        return $lm;
    }
}