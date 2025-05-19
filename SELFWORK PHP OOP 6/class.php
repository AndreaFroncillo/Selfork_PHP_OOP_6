<?php

abstract class Category{
    abstract public function getMyCategory();
}

class Attualità extends Category{
    public function getMyCategory(){
        return "Attualità";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        return "Sport";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        return "Gossip";
    }
}

class Storia extends Category{
    public function getMyCategory(){
        return "Storia";
    }
}

$attualità = new Attualità;
/* $attualità->getMyCategory(); */

$sport = new Sport;
/* $sport->getMyCategory(); */

$gossip = new Gossip;
/* $gossip->getMyCategory(); */

$storia = new Storia;
/* $storia->getMyCategory(); */