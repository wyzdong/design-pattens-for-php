<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:39
 */
class Cpu extends Colleague {
    /**
     * @var string
     */
    private $videoData;

    /**
     * @var string
     */
    private $soundData;

    /**
     * @return string
     */
    public function getVideoData()
    {
        return $this->videoData;
    }

    /**
     * @return string
     */
    public function getSoundData()
    {
        return $this->soundData;
    }

    public function executeData($data) {
        $ss = explode(',', $data);

        $this->videoData = $ss[0];
        $this->soundData = $ss[1];

        $this->getMediator()->changed($this);
    }
}