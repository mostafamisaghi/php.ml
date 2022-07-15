<?php

abstract class OnlineGateway
{
    protected $option;

    public function __construct()
    {
        $this->option = array(
            'mellat' => array(
                'merchent' => '2345654',
                'username' => 'mellatUsrname',
                'password' => 'mellatPassword'
            ),
            'saman' => array(
                'apikey' => 'lrjlj4k5tkmfs'
            ),
            'parsian' => array(
                'username' => 'parsianUsrname',
                'password' => 'parsianPassword'
            )
        );
    }
}

class Mellat extends OnlineGateway
{
    private $gatewayName;
    private $mellatOptions;

    public function __construct()
    {
        $this->gatewayName = 'mellat';
        parent::__construct();
        $this->mellatOptions = $this->option[$this->gatewayName];
    }

    public function sendRequest()
    {
        var_dump($this->mellatOptions);
    }
}


class Saman extends OnlineGateway
{
    private $gatewayName;
    private $samanOptions;

    public function __construct()
    {
        $this->gatewayName = 'saman';
        parent::__construct();
        $this->samanOptions = $this->option[$this->gatewayName];
    }

    public function sendRequest()
    {
        var_dump($this->samanOptions);
    }
}


class Parsian extends OnlineGateway
{
    private $gatewayName;
    private $parsianOptions;

    public function __construct()
    {
        $this->gatewayName = 'parsian';
        parent::__construct();
        $this->parsianOptions = $this->option[$this->gatewayName];
    }

    public function sendRequest()
    {
        var_dump($this->parsianOptions);
    }
}


//$mellat = new Mellat();
//$mellat->sendRequest();


class Factory{

    public static function Make($class)
    {
        $className = ucfirst($class);
        if (!class_exists($className)){
            return false;
        }
        echo "</br>";
        echo "</br>";
        echo "$class : ";
        return new $className;
    }

}

$factoryMellat = Factory::Make('mellat');
$factoryMellat->sendRequest();

$factoryParsian = Factory::Make('parsian');
$factoryParsian->sendRequest();

$factorySaman = Factory::Make('saman');
$factorySaman->sendRequest();

















