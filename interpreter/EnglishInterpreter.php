<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 15:07
 */
class EnglishInterpreter extends AbstractInterpreter {
    public  function interpret($context)
    {
        // TODO: Implement interpret() method.
        for ($i = 1; $i<count($context); $i++) {
            switch ($context[$i]) {
                case '0':
                    echo "This is nobody\n";
                    break;
                case '1':
                    echo "This is one people\n";
                    break;
                case '2':
                    echo "This is two people\n";
                    break;
                case '3':
                    echo "This is three people\n";
                    break;
                case '4':
                    echo "This is four people\n";
                    break;
                case '5':
                    echo "This is five people\n";
                    break;
                case '6':
                    echo "This is six people\n";
                    break;
                case '7':
                    echo "This is seven people\n";
                    break;
                case '8':
                    echo "This is eight people\n";
                    break;
                case '9':
                    echo "This is nine people\n";
                    break;
                default:
                    echo "others\n";
            }
        }
    }
}