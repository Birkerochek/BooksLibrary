<?php
include 'Book.php';
include 'Reader.php';
include 'Library.php';

$library = new Library([],[]);

$book1 = new Book("Книга 1", "Автор 1", 1999 );
$book2 = new Book("Книга 2", "Автор 2", 2001 );
$book3 = new Book("Книга 3", "Автор 3", 2003 );

$reader = new Reader("Читатель", "reader@gmail.com", []);

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addReader($reader);

$reader->borrowBooks($book1);

print_r($library->listBooks());








