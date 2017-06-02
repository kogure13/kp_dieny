<?php

include_once '../../inc/config.php';
$db = new dbObj();
$connString = $db->getConstring();

$params = $_REQUEST;

$action = isset($params['action']) != '' ? $params['action'] : '';
$userClass = new User($connString);

switch ($action) {
    case 'registrasi' : $userClass->regUser($params);
        break;
    case 'login' : $userClass->loginUser($params);
        break;    
    default :
        $userClass->getUser($params);
        return;
}

class User {

    protected $conn;
    protected $data = [];

    function __construct($connString) {
        $this->conn = $connString;
    }

    public function getUser($params) {
        $this->data = $this->getRecords($params);
        echo json_encode($this->data);
    }

    function getRecords() {
        $tname = "mhs_login";
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        $rp = isset($_POST['rp']) ? $_POST['rp'] : 10;
        $sortname = isset($_POST['sortname']) ? $_POST['sortname'] : 'no_induk';
        $sortorder = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
        $query = isset($_POST['query']) ? $_POST['query'] : false;
        $qtype = isset($_POST['qtype']) ? $_POST['qtype'] : false;

        $start = ($page - 1) * $rp;
        $sql = "SELECT * FROM " . $tname;
        $sql .= " ORDER BY " . $sortname . " " . $sortorder;
        $sql .= " LIMIT " . $start . " , " . $rp . " ";
        $sqlTot = "SELECT * FROM " . $tname;
        $qtot = mysqli_query($this->conn, $sqlTot) or die("Error to fecth total \"Kategori\"");
        $queryRecords = mysqli_query($this->conn, $sql) or die("Errot to fecth kategori data");

        if (intval($qtot->num_rows) > 0) {
            while ($row = mysqli_fetch_assoc($queryRecords)) {
                $data[] = $row;
            }

            $json_data = [
                "page" => $page,
                "total" => intval($qtot->num_rows),
                "rows" => $data
            ];
            return $json_data;
        } else {
            $json_data = [
                "page" => 0,
                "total" => 0,
                "rows" => 0
            ];
            return $json_data;
        }
    }

    function regUser($params) {
        $data = array();        
        $sql = "INSERT INTO mhs_data";
        $sql .= " (nim, email)";
        $sql .= " VALUES('".addslashes($params['nim'])."', "
                . "'".addslashes($params['email']). "')";

        echo $result = mysqli_query($this->conn, $sql) or die("error to insert kategori data");
    }

    function loginUser($params) {
        $data = array();
        
    }   
}
