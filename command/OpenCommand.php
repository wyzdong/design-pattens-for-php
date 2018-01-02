<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 14:56
 */
class OpenCommand implements Command {
    /**
     * @var MainBoardApi2
     */
    private $mainBoard;

    public function __construct(MainBoardApi2 $boardApi)
    {
        $this->mainBoard = $boardApi;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->mainBoard->open();
    }
}