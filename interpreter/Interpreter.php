<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 15:09
 */
class Interpreter {
    /**
     * @var AbstractInterpreter
     */
    private $interpreter;

    /**
     * @var
     */
    private $context;

    public function __construct(Expression $expression)
    {
        $this->context = $expression->getContext();
        if ($this->context[0] == 'Chinese') {
            $this->interpreter = new ChineseInterpreter();
        } else {
            $this->interpreter = new EnglishInterpreter();
        }
    }

    public function execute() {
        $this->interpreter->interpret($this->context);
    }
}