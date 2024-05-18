<?php

// Add Book class
class Book {
    // add Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize Private properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method/Function to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method/Function to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method/Function to borrow a book (decreases available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Method/Function to return a book (increases available copies)
    public function returnBook() {
        $this->availableCopies++;
    }
}

// Add Member class
class Member {
    // Add Private property
    private $name;

    // Constructor to initialize Private properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method/Function to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method/Function for the member to borrow a book
    public function borrowBook($book) {
        $book->borrowBook();
    }

    // Method/Function for the member to return a book
    public function returnBook($book) {
        $book->returnBook();
    }
}

// Usage

// Create two books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create two members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Two Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies after Two Members borrowing books
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
?>