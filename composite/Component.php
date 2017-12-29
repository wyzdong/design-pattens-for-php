<?php
/**
 * 抽象的组件对象，为组合中的对象声明接口，实现接口的缺省行为
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 14:40
 */
abstract class Component {
    public abstract function printStructure($preStr);

    public function addChild(Component $child) {
        throw new Exception('对象不支持该功能');
    }

    public function removeChild(Component $child) {
        throw new Exception('对象不支持该功能');
    }

    public function getChildren($index) {
        throw new Exception('对象不支持该功能');
    }
}