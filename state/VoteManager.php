<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/3
 * Time: 8:51
 */
class VoteManager {
    /**
     * @var VoteState
     */
    private $state = null;

    /**
     * @var array
     */
    private $mapVote = [];

    /**
     * @var array
     */
    private $mapVoteCount = [];

    /**
     * @return array
     */
    public function getMapVoteCount()
    {
        return $this->mapVoteCount;
    }

    /**
     * @return array
     */
    public function getMapVote()
    {
        return $this->mapVote;
    }

    /**
     * @param string $user
     * @param string $voteItem
     */
    public function addMapVote($user, $voteItem)
    {
        $this->mapVote[$user] = $voteItem;
    }

    /**
     * @param $user
     */
    public function removeMapVote($user) {
        unset($this->mapVote[$user]);
    }

    public function vote($user, $voteItem) {
        $oldVoteCount = isset($this->mapVoteCount[$user]) ? $this->mapVoteCount[$user] : null;
        if ($oldVoteCount === null) {
            $oldVoteCount = 0;
        }
        $oldVoteCount = $oldVoteCount + 1;
        $this->mapVoteCount[$user] = $oldVoteCount;
        if ($oldVoteCount == 1) {
            $this->state = new NormalVoteState();
        } elseif ($oldVoteCount > 1 && $oldVoteCount < 5) {
            $this->state = new RepeatVoteState();
        } elseif ($oldVoteCount >= 5 && $oldVoteCount < 8) {
            $this->state = new SpiteVoteState();
        } elseif ($oldVoteCount >= 8) {
            $this->state = new BlackVoteState();
        }

        $this->state->vote($user, $voteItem, $this);
    }
}