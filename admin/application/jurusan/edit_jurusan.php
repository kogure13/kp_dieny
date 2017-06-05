<?php

include_once '../../../inc/class.php';
$db = new Database();
$connString = $db->getConstring();
$jurusanClass = new Jurusan($connString);


if(!isset($_GET['id'])){
    exit();
}else{
    $params = $_GET['id'];
}
if ($params > 0) {
    $jurusanClass->getJurusan($params);
} else {
    mysql_errno();
}

class Jurusan {

    protected $conn;    

    function __construct($connString) {
        $this->conn = $connString;
    }

    function getJurusan($params) {
        $json_data = array();
        $sql = "SELECT * FROM master_jurusan";
        $sql .= " WHERE id = $params";

        $result = mysqli_query($this->conn, $sql) or die();
                
        while ($row = mysqli_fetch_assoc($result)) {            
            $json_data = $row;
        }
        echo json_encode($json_data);
    }
}
