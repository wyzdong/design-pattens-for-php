<?php
function __autoload($className) {
    $fileName = __DIR__ . '/' .$className . ".php";
    if (file_exists($fileName)) {
        require $fileName;
    } else {
        throw new Exception($className . ' not exist');
    }
}
class Client {
    public function run() {
        $mediator = new MainBoard3();

        $cd = new CdDriver($mediator);
        $cpu = new Cpu($mediator);
        $videoCard = new VideoCard($mediator);
        $soundCard = new SoundCard($mediator);

        $mediator->setCdDriver($cd);
        $mediator->setCpu($cpu);
        $mediator->setVideoCard($videoCard);
        $mediator->setSoundCard($soundCard);

        $cd->readCd();
    }
}

(new Client())->run();