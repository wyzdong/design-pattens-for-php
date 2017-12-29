<?php
/**
 * 装饰器接口，需要和被装饰的对象实现同样的接口
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 16:58
 */
class Decorator extends Component {
    /**
     * @var Component
     */
    protected $component = null;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function calcPrice($user, $begin, $end)
    {
        return $this->component->calcPrice($user, $begin, $end);
    }
}