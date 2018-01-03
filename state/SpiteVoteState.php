<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 9:06
 */
class SpiteVoteState implements VoteState {
    public function vote($user, $voteItem, VoteManager $voteManager)
    {
        // TODO: Implement vote() method.
        $voteManager->removeMapVote($user);
        echo "你有恶意刷票行为，取消投票资格\n";
    }
}