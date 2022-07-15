<?php

//namespace Model;

trait logger{
    public function log($data)
    {
        echo "$data logged.";
    }
}

class sample{
    use logger;
}

(new sample())->log("sample data");


class Shape
{
    public  function getNameClass()
    {
        echo static::class;
    }
}

class Circle extends Shape{

}


class Square extends Shape{

}


$c=new Circle();
$s=new Square();
$shape=new Shape();

$shape->getNameClass();
$s->getNameClass();
$c->getNameClass();


?>



