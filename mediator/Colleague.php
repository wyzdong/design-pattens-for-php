<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:26
 */
abstract class Colleague {
    /**
     * @var Mediator
     */
    private $mediator = null;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    /**
     * @return Mediator
     */
    public function getMediator()
    {
        return $this->mediator;
    }
}