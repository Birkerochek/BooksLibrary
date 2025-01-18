<?php

class Reader {
    public string $name;
    public string $email;
    public array $borrowedBooks;

    public function __construct(string $name, string $email, array $borrowedBooks) {
        $this->name = $name;
        $this->email = $email;
        $this->borrowedBooks = $borrowedBooks;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getEmail(): string {
        return $this->email;
    }

    public function borrowBooks(Book $book): bool {
        if ($book->getAvailability()) {
            $this->borrowedBooks[] = $book;
            $book->setAvailability(false);
            return true;
        }
        return false;
    
    }

    public function returnBook(Book $book): bool {
     (bool)$index = array_search($book, $this->borrowedBooks, true);
        if ($index) {
            unset($this->borrowedBooks[$index]);
            $book->setAvailability(true);
            return true;
        }
        return false;
    }
}