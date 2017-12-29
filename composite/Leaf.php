<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 15:14
 */
class Leaf extends Component {
    /**
     * 叶子对象的名字
     * @var string
     */
    private $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public  function printStructure($preStr)
    {
        // TODO: Implement printStruct() method.
        echo $preStr . "-" . $this->name . "\n";
    }
}