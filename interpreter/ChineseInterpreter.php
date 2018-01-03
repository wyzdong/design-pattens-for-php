<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 15:03
 */
class ChineseInterpreter extends AbstractInterpreter {
    public function interpret($context)
    {
        // TODO: Implement interpret() method.
        for ($i = 1; $i<count($context); $i++) {
            switch ($context[$i]) {
                case '0':
                    echo "没有人\n";
                    break;
                case '1':
                    echo "一个人\n";
                    break;
                case '2':
                    echo "两个人\n";
                    break;
                case '3':
                    echo "三个人\n";
                    break;
                case '4':
                    echo "四个人\n";
                    break;
                case '5':
                    echo "五个人\n";
                    break;
                case '6':
                    echo "六个人\n";
                    break;
                case '7':
                    echo "七个人\n";
                    break;
                case '8':
                    echo "八个人\n";
                    break;
                case '9':
                    echo "九个人\n";
                    break;
                default:
                    echo "其他\n";
            }
        }
    }
}