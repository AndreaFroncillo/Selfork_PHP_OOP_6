<?php

abstract class Categoria{
    abstract public function getMyCategory();
}

class Attualità extends Categoria{
    public function getMyCategory(){
        echo "Attualità \n";
    }
}

class Sport extends Categoria{
    public function getMyCategory(){
        echo "Sport \n";
    }
}

class Gossip extends Categoria{
    public function getMyCategory(){
        echo "Gossip \n";
    }
}

class Storia extends Categoria{
    public function getMyCategory(){
        echo "Storia \n";
    }
}


class Post{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct(Categoria $_titolo, Categoria $_categoria, Categoria $_tag){
        $this->titolo = $_titolo;
        $this->categoria = $_categoria;
        $this->tag = $_tag;
    }

    public function title(){
        echo "\n\n\n\n\n TITOLO ";
        $this->titolo->getMyCategory();
        
        
    }

    public function category(){
        echo "\n CATEGORIA ";
        $this->categoria->getMyCategory();
        
    }

    public function tag(){
        echo "\n TAG ";
        $this->tag->getMyCategory();
    }

}

$attualità = new Post(new Attualità, new Attualità, new Attualità);
$attualità->title();
$attualità->category();
$attualità->tag();

$sport = new Post(new Sport, new Sport, new Sport);
$sport->title();
$sport->category();
$sport->tag(); 

$gossip = new Post(new Gossip, new Gossip, new Gossip);
$gossip->title();
$gossip->category();
$gossip->tag();

$storia = new Post(new Storia, new Storia, new Storia);
$storia->title();
$storia->category();
$storia->tag();