<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 9:54
 */
abstract class Subject implements SplSubject {
    /**
     * @var array
     */
    private $readers = [];

    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        array_push($this->readers, $observer);
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $key = array_search($observer, $this->readers);
        if (false !== $key) {
            unset($this->readers[$key]);
        }
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->readers as $reader) {
            if ($reader instanceof SplObserver) {
                $reader->update($this);
            }
        }
    }
}