<?php
class DBcontroller{
    //database connection properties
    protected $host='localhost';
    protected $user='root';
    protected $password='';
    protected $database="anime_jump";

    //connection property
    public $con=null;

    //call constructor

    public function __construct(){
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
    if($this->con->connect_error){
        echo"Fail to contect..!".$this->con->connect_error;
    }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }
    //closing connection 
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con=null;
        }
    }
}
//DBController object
$db=new DBcontroller();