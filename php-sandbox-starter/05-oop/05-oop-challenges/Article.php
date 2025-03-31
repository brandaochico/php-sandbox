<?php

// Challenge 1

class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content) {
        $this -> title = $title;
        $this -> content = $content;        
    }

    public function publish() {
        $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }

}

$article1 = new Article('Lorem Ipsum', 'Lorem Ipsum');
$article2 = new Article('Sample text', 'Sample text');

$article1->publish();
$article2->publish();

echo $article1->isPublished() . '<br>';
echo $article2->isPublished() . '<br>';