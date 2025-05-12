<?php

require_once('class.php');


class Post{
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($_titolo, Category $_categoria, $_tag){
        $this->titolo = $_titolo;
        $this->categoria = $_categoria;
        $this->tag = $_tag;
    }

    public function getTitle(){
        return $this->titolo;
    }

    public function getCategory(){
        return $this->categoria->getMyCategory();
        
    }

    public function getTag(){
        return $this->tag;
    }

}

$post = new Post("Titolo", new Attualità(), "tag 1");
$post2 = new Post("Titolo 2", new Gossip(), "tag 2");

echo $post->getCategory();
echo $post2->getTitle();