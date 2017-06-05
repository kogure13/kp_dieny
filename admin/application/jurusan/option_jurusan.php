<?php
include '../../../inc/class.php';
$db = new Database();
$connString = $db->getConstring();
$optionClass = new Option($connString);
$params = $_REQUEST;
$optionClass->getOption($params);
class Option {
    protected $conn;
    protected $data = array();
            
    function __construct($connString) {
        $this->conn = $connString;
    }
    
    function getOption($params) {        
        $sql = "SELECT * FROM master_fakultas";
        $result = mysqli_query($this->conn, $sql);
        
        while ($row = mysqli_fetch_assoc($result)){
            $json_data[] = $row;
        }                
        
        echo json_encode($json_data);
    }
}