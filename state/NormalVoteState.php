<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 8:52
 */
class NormalVoteState implements VoteState {
    public function vote($user, $voteItem, VoteManager $voteManager)
    {
        // TODO: Implement vote() method.
        $voteManager->addMapVote($user, $voteItem);
        echo "恭喜你投票成功\n";
    }
}