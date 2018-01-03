<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 9:09
 */
class BlackVoteState implements VoteState {
    public function vote($user, $voteItem, VoteManager $voteManager)
    {
        // TODO: Implement vote() method.
        echo "进入黑名单，将禁止登录和使用本系统\n";
    }
}