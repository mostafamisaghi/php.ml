<?php

class User{
    protected $name;
    protected $email;

    public function __construct($name,$email)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->name = $email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

class Admin extends User {

    private $username;
    private $permission;

    public function __construct($name,$email)
    {
        parent::__construct($name,$email);
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPermission()
    {
        return $this->permission;
    }
}

class Customer extends User {
    private $username;
    private $creditCard;

    public function __construct($name,$email)
    {
        parent::__construct($name,$email);
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getCreditCard()
    {
        return $this->creditCard;
    }
}

$admin = new Admin('Mostafa',"mrmisaghi@gmail.com");
$customer = new Customer('moshtari','moshtari@gmail.com');

$admin->setUsername('misaghi');
$admin->setPermission('All');

echo $admin->getName().' '.$admin->getEmail()."</br>";
echo $admin->getUsername().' '.$admin->getPermission();


//------------------------------------------------------------------------------

abstract class DBCommon{
    private $host;
    private $uid;
    private $db;
    private $pass;

    public function __construct($db,$host,$pass,$uid)
    {
        $this->db = $db;
        $this->host = $host;
        $this->uid = $uid;
        $this->pass = $pass;
    }
}

interface DBInterface{

    public function DBConnection();
    public function Insert($Data);
    public function Read($Where);
    public function Update($Where);
    public function Delete($Where);
}

class MySQLDriver extends DBCommon implements DBInterface{

    public function __construct($db,$host,$pass,$uid)
    {
        parent::__construct($db,$host,$pass,$uid);
    }

    public function DBConnection()
    {
        echo '</br>'."MySql DB Connected Successfully!!!";
    }

    public function Insert($Data)
    {
        // TODO: Implement Insert() method.
    }

    public function Read($Where)
    {
        // TODO: Implement Read() method.
    }

    public function Update($Where)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($Where)
    {
        // TODO: Implement Delete() method.
    }
}

class MongoDBDriver extends DBCommon implements DBInterface{

    public function __construct($db,$host,$pass,$uid)
    {
        parent::__construct($db,$host,$pass,$uid);
    }

    public function DBConnection()
    {
       echo '</br>'."Mongo DB Connected Successfully!!!";
    }

    public function Insert($Data)
    {
        // TODO: Implement Insert() method.
    }

    public function Read($Where)
    {
        // TODO: Implement Read() method.
    }

    public function Update($Where)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($Where)
    {
        // TODO: Implement Delete() method.
    }
}

$host = '192.168.1.20';
$db = "database";
$uid = 'root';
$pass = '3p4oihutrbeg';

$MongoDB = new MongoDBDriver($db,$host,$pass,$uid);
$SQLDB = new MySQLDriver($db,$host,$pass,$uid);

$SQLDB->DBConnection()
?>
