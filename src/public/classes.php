<?php

class Book
{

    public $id;
    public $name;
    public $author;
    public $file_path;
    public $type;
    public $sort_order;

    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->author = $row['author'];
        $this->file_path = $row['file_path'];
        $this->type = $row['type'];
        $this->sort_order = $row['sort_order'];
    }

}

class BookPdf extends Book
{

    public function printInfo()
    {
        echo "<br><img src='images/$this->type.jpg'> $this->author,
                 <a href='" . $this->file_path . "'target=_blank''>$this->name</a>";


    }

}

class BookTxt extends Book
{

    public function printInfo()
    {
        echo "<br><img src='images/$this->type.jpg'> $this->author,
                 <a href='" . $this->file_path . "'target=_blank''>$this->name </a>";
    }

}

class BookDoc extends Book
{

    public function printInfo()
    {
        echo "<br><img src='images/$this->type.jpg'> $this->author,
                 <a href='" . $this->file_path . "'target=_blank''>$this->name</a>";
    }

}