<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 14:58
 */
class Box {
    /**
     * @var OpenCommand
     */
    private $openCommand;

    /**
     * @param OpenCommand $openCommand
     */
    public function setOpenCommand($openCommand)
    {
        $this->openCommand = $openCommand;
    }

    public function openButtonPressed() {
        $this->openCommand->execute();
    }

    /**
     * @var ResetCommand
     */
    private $resetCommand;

    /**
     * @param ResetCommand $resetCommand
     */
    public function setResetCommand($resetCommand)
    {
        $this->resetCommand = $resetCommand;
    }

    public function resetButtonPressed() {
        $this->resetCommand->execute();
    }
}