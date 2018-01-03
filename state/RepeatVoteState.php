<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 9:05
 */
class RepeatVoteState implements VoteState {
    public function vote($user, $voteItem, VoteManager $voteManager)
    {
        // TODO: Implement vote() method.
        echo "请不要重复投票\n";
    }
}