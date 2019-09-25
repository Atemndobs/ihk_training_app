<?php

class data_bank
{
    public $host = 'localhost';
    private $user="root";
    private $pass="Root+1234";
    private $db="prufung";
    public $conn;
    function __construct()
    {
        $this->conn=mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function selectData($table)
    {
        $query="select * from ".$table;
        $result=mysqli_query($this->conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[$row['id']] = $row;
            //$data = $row['id'];
        }
        return $data;
    }

    function insertData($table,$arr)
    {
        $data=implode(
            ',', array_map(
                function ($v, $k) {
                    return $k . '=' . "'$v'"; 
                },  $arr,  array_keys($arr)
            )
        );

        $query="insert into ".$table." set ".$data;
        return mysqli_query($this->conn, $query) or die("Query error ".mysqli_error($this->conn));
    }
    function updateData($table,$arr,$id)
    {
        $data=implode(
            ',', array_map(
                function ($v, $k) {
                    return $k . '=' . "'$v'"; 
                },  $arr,  array_keys($arr)
            )
        );
        $query="update ".$table." set ".$data." where user_id=".$id;
        return mysqli_query($this->conn, $query) or die("Query error ".mysqli_error($this->conn));
    }
    function delete($table,$id)
    {
        $query="delete from ".$table." where id =".$id;
        return mysqli_query($this->conn, $query) or die("Query error ".mysqli_error($this->conn));
    }

}
