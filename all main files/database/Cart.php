<?php
//php cart class
class Cart{
    public $db=null;

    public function __construct(DBcontroller $db){
        if(!isset($db->con))return null;
        $this->db=$db;
    }
    //insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }
    // to get user id and item id so we can insert to table
    public function addToCart($userid,$itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid,
            );
            $result=$this->insertIntoCart($params);
            if($result){
                //reload page
                header("Location: " . $_SERVER["PHP_SELF"]);
            }
        }
    }
}
