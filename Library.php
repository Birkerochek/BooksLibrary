<?php

class Library{
    public array $books;
    public array $readers;
    public function __construct(array $books, array $readers){
        $this->books = $books;
        $this->readers = $readers;
    }

    public function addBook(Book $book): void{
        $this->books[] = $book;

    }

    public function addReader(Reader $reader): void{
        $this->readers[] = $reader;
    }
    public function findBook(string $title): mixed{
        foreach($this->books as $book){
            if($book->getTitle() == $title){
                return $book;
            }
        }
        return null;
    }
    public function listBooks(){
        foreach ($this->books as $book) {
            echo $book->getTitle()." написана ". $book->getAuthor() . "\n";
        }
    }

}