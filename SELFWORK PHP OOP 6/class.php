<?php

abstract class Category{
    abstract public function getMyCategory();
}

class Attualità extends Category{
    public function getMyCategory(){
        echo "Attualità \n";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        echo "Sport \n";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        echo "Gossip \n";
    }
}

class Storia extends Category{
    public function getMyCategory(){
        echo "Storia \n";
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