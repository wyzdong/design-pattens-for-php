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
        $root = new Composite("服装");
        $c1 = new Composite("男装");
        $c2 = new Composite("女装");

        $leaf1 = new Leaf("衬衣");
        $leaf2 = new Leaf("夹克");
        $leaf3 = new Leaf("裙子");
        $leaf4 = new Leaf("套装");

        $root->addChild($c1);
        $root->addChild($c2);

        $c1->addChild($leaf1);
        $c1->addChild($leaf2);
        $c2->addChild($leaf3);
        $c2->addChild($leaf4);

        $root->printStructure("");
    }
}

(new Client())->run();