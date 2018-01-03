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
        $voteManager = new VoteManager();

        $i = 0;
        while ($i < 10) {
            $voteManager->vote('user1', 'A');
            $voteManager->vote('user2', 'B');
            $voteManager->vote('user3', 'C');
            $voteManager->vote('user4', 'D');
            $voteManager->vote('user5', 'E');
            print_r($voteManager->getMapVote());
            print_r($voteManager->getMapVoteCount());
            $i++;
        }
    }
}

(new Client())->run();