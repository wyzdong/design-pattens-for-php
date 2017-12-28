<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 10:40
 */
abstract class ExportOperate {
    public function export($data) {
        $api = $this->factoryMethod();

        $api->export($data);
    }

    /**
     * @return ExportFileApi
     */
    public abstract function factoryMethod();
}