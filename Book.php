<?php

/*
 * une méthode permettant d'afficher le livre
 */




class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($c_title, $c_author, $c_editor, $c_pageNb){
        $this->title  = $c_title;
        $this->author = $c_author;
        $this->editor = $c_editor;
        $this->pageNb = $c_pageNb;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getEditor(){
        return $this->editor;
    }

    public function getPageNb(){
        return $this->pageNb;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function setEditor($editor){
        $this->editor = $editor;
    }

    public function setPageNb($pageNb){
        $this->pageNb = $pageNb;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function Show(){
        echo 'Le livre '     .$this->getTitle().
            ' ecrit par '    .$this->getAuthor().
            ' et publie par '.$this->getEditor().
            ' contenant '    .$this->getPageNb().
            ' pages';
    }
}