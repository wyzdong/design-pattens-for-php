<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 16:29
 */
class PersonalCustomer extends Customer {
    /**
     * @var string
     */
    private $telephone;

    /**
     * @var int
     */
    private $age;

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public  function accept(Visitor $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitPersonalCustomer($this);
    }
}