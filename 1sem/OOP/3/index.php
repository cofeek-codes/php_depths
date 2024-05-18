<?php

class Book
{
    private string $title;
    private string $author;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }
}

$book = new Book('The Road Ahead', 'Bill Gates');
$book2 = new Book('Robinson Crusoe', 'Daniel Defoe');

echo "Book 1\n";

echo $book->getTitle() . "\n";
echo $book->getAuthor() . "\n";

echo "Book 2\n";

echo $book2->getTitle() . "\n";
echo $book2->getAuthor() . "\n";
