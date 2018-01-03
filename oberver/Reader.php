<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:02
 */
class Reader implements SplObserver {
    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        if ($subject instanceof NewsPaper) {
            echo $this->name . "收到报纸了，报纸内容是 ==== " . $subject->getContent() . "\n";
        }
    }
}