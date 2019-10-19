<?php
include 'Book.php';

class Library
{
    private $name;
    private $address;
    private $max;
    private $arrayBook = [];
    const MAX_BOOKS = 10;

    public function __construct($c_name,$c_address,$c_max){
        $this->address = $c_address;
        $this->name    = $c_name;
        $this->max     = $c_max;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getMax()
    {
        return $this->max;
    }
    public function setMax($max)
    {
        $this->max = $max;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getArrayBook()
    {
        return $this->arrayBook;
    }
    public function setArrayBook($arrayBook)
    {
        $this->arrayBook = $arrayBook;
    }


    public function showBook(){
        if (count($this->arrayBook) == 0) {
            echo 'Aucun livre est enregistré';
            return;
        }

        foreach($this->arrayBook as $book){
            $book->show();
        }
    }

    public function addBook($book){
        if(in_array($book,$this->arrayBook)){
            echo 'Livre deja present';
            return;
        }
        else if(count($this->arrayBook) == self::MAX_BOOKS){
            echo 'max de livre atteint';
            return;
        }
        $this->arrayBook[] = $book;
    }

    public function removeBook($book){
        $findBook = array_search($book, $this->arrayBook);
        if($findBook == NULL){
            echo 'Livre non trouvé';
            return;
        }
        unset($this->arrayBook[$findBook]);
    }

    public function removeTwin(){
        foreach ($this->arrayBook as $book){
            if (count(array_keys($this->arrayBook, $book)) > 1) {
                $this->removeBook($book);
            }
        }
    }

    public function showComBook($library){
        foreach ($this->arrayBook as $book){
            if (in_array($book,$library->getArrayBook())) {
                $book->show();
            }
        }
    }

    public function bookByAuthor($author){
        $bookAuthor = [];
        foreach ($this->arrayBook as $book){
            if($book->getAuthor() === $author){
                $bookAuthor[] = $book;
            }
        }
    }


}