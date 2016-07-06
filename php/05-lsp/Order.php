<?php

class Order
{

    private $books;
    private $pencils;

    public function __construct()
    {
        $this->books = new ArrayObject();
        $this->pencils = new ArrayObject();
    }

    public function addBook(Book $book)
    {
        $this->books->append($book);
    }

    public function addPencil(Pencil $pencil)
    {
        $this->pencils->append($pencil);
    }

    public function getTotal()
    {
        $booksSubTotal = 0.0;
        $pencilsSubTotal = 0.0;

        foreach ($this->books as $book) {
            $booksSubTotal += $book->getPrice();
        }

        foreach ($this->pencils as $pencil) {
            $pencilsSubTotal += $pencil->getPrice();
        }

        return $booksSubTotal + $pencilsSubTotal;
    }

}
