<?php
/**
 * 第一版本，用文件记录日志操作
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/29
 * Time: 9:48
 */
interface LogFileOperateApi {
    /**
     * @return Generator
     */
    public function readLogFile();

    public function writeLogFile(array $list);
}