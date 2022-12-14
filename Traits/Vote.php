<?php

trait Vote{
    protected $vote;

    public function getVote(){
        return $this->vote;
    }

    public function setVote($vote)
    {
        if($vote > 0){
            $this->vote = $vote;
        }else{
            $this->vote = 0;
        }
        return $this;
    }

}