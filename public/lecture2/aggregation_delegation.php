<?php
class Author {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Book {
    private $author;

    public function __construct(Author $author) {
        $this->author = $author;
    }

    public function getAuthorName() {
        return $this->author->getName();
    }
}

$author = new Author("J.K. Rowling");
$book = new Book($author);
echo $book->getAuthorName(); // Ausgabe: J.K. Rowling
?>