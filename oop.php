<?php

class Book {
    private $title;
    private $copies;

    public function __construct($title, $copies) {
        $this->title = $title;
        $this->copies = $copies;
    }

    
    public function getTitle() {
        return $this->title;
    }

    public function getCopies() {
        return $this->copies;
    }

    public function borrowBook() {
        if ($this->copies > 0) {
            $this->copies--;
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->copies++;
    }
}



class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }



    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo $this->name . " borrowed " . $book->getTitle() . ".\n";
        } else {
            echo $this->name . " couldn't borrow " . $book->getTitle() . " (none available).\n";
        }
    }

    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned " . $book->getTitle() . ".\n";
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Copies left of '" . $book1->getTitle() . "': " . $book1->getCopies() . "\n";
echo "Copies left of '" . $book2->getTitle() . "': " . $book2->getCopies() . "\n";

?>
