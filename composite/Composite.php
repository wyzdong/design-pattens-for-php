<?php
/**
 * 组合对象，通常需要存储子对象，定义有子部件的部件行为
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 14:44
 */
class Composite extends Component {
    /**
     * @var array
     */
    private $childComponents = array();

    /**
     * 组合对象的名字
     * @var string
     */
    private $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function printStructure($preStr)
    {
        // TODO: Implement printStruct() method.
        echo $preStr . "+" .$this->name . "\n";
        $preStr .= "    ";
        foreach ($this->childComponents as $component) {
            if ($component instanceof Component) {
                $component->printStructure($preStr);
            }
        }
    }

    public function addChild(Component $child) {
        if (false === array_search($child, $this->childComponents)) {
            $this->childComponents[] = $child;
        }
    }

    public function removeChild(Component $child)
    {
        $index = array_search($child, $this->childComponents);
        if (false !== $index) {
            unset($this->childComponents[$index]);
        }
    }

    public function getChildren($index)
    {
        return $this->childComponents[$index];
    }
}