<?php

class Book {

    public string $title;
    public string $author;
    public int $year;
    public bool $isAvailable;

    public function __construct(string $title, string $author, bool $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvailable = true;

    }
    public function getTitle():string {
        return $this->title;
    }
    public function getAuthor():string {
        return $this->author;
    }
    public function getYear(): int {
        return $this->year;
    }
    public function getAvailability(): bool {
        return $this->isAvailable;
    }
    public function setAvailability($isAvailable): void {
        $this->isAvailable = $isAvailable;
    }
}