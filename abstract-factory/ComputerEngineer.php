<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2017/12/28
 * Time: 9:40
 */
class ComputerEngineer {
    /**
     * @var CpuApi
     */
    private $cpu = null;

    /**
     * @var MainBoardApi
     */
    private $mainBoard = null;

    public function makeComputer(AbstractFactory $schema) {
        $this->prepareHardWares($schema);
    }

    private function prepareHardWares(AbstractFactory $schema) {
        $this->cpu = $schema->createCpuApi();

        $this->mainBoard = $schema->createMainBoardApi();

        $this->cpu->calculate();
        $this->mainBoard->installCpu();
    }
}