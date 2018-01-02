<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 16:00
 */
class EnterpriseCustomer extends Customer {
    /**
     * @var string
     */
    private $linkMan;

    /**
     * @var string
     */
    private $linkTelephone;

    /**
     * @var string
     */
    private $registerAddress;

    /**
     * @return string
     */
    public function getLinkMan()
    {
        return $this->linkMan;
    }

    /**
     * @param string $linkMan
     */
    public function setLinkMan($linkMan)
    {
        $this->linkMan = $linkMan;
    }

    /**
     * @return string
     */
    public function getLinkTelephone()
    {
        return $this->linkTelephone;
    }
    /**
     * @param string $linkTelephone
     */
    public function setLinkTelephone($linkTelephone)
    {
        $this->linkTelephone = $linkTelephone;
    }

    /**
     * @return string
     */
    public function getRegisterAddress()
    {
        return $this->registerAddress;
    }

    /**
     * @param string $registerAddress
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->registerAddress = $registerAddress;
    }

    public  function accept(Visitor $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitEnterpriseCustomer($this);
    }
}