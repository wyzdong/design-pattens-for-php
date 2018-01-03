<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 8:50
 */
interface VoteState {
    /**
     * @param string $user
     * @param string $voteItem
     * @param VoteManager $voteManager
     */
    public function vote($user, $voteItem, VoteManager $voteManager);
}