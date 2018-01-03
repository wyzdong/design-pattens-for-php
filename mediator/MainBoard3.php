<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 10:45
 */
class MainBoard3 implements Mediator {
    /**
     * @var CdDriver
     */
    private $cdDriver = null;

    /**
     * @var Cpu
     */
    private $cpu = null;

    /**
     * @var VideoCard
     */
    private $videoCard = null;

    /**
     * @var SoundCard
     */
    private $soundCard = null;

    /**
     * @param CdDriver $cdDriver
     */
    public function setCdDriver($cdDriver)
    {
        $this->cdDriver = $cdDriver;
    }

    /**
     * @param Cpu $cpu
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @param VideoCard $videoCard
     */
    public function setVideoCard($videoCard)
    {
        $this->videoCard = $videoCard;
    }

    /**
     * @param SoundCard $soundCard
     */
    public function setSoundCard($soundCard)
    {
        $this->soundCard = $soundCard;
    }

    public function changed(Colleague $colleague)
    {
        // TODO: Implement changed() method.
        if ($colleague instanceof CdDriver) {
            $this->opeCdDriverReadData($colleague);
        } elseif ($colleague instanceof Cpu) {
            $this->opeCpu($colleague);
        }
    }

    private function opeCdDriverReadData(CdDriver $cd) {
        $data = $cd->getData();
        $this->cpu->executeData($data);
    }

    private function opeCpu(Cpu $cpu) {
        $videoData = $cpu->getVideoData();
        $soundData = $cpu->getSoundData();

        $this->videoCard->showData($videoData);
        $this->soundCard->soundData($soundData);
    }
}