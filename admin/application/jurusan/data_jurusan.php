<?php

include_once '../../../inc/class.php';
$db = new Database();
$connString = $db->getConstring();
$jurusanClass = new Jurusan($connString);

$params = $_REQUEST;
$action = isset($params['action']) != '' ? $params['action'] : '';

switch ($action) {
    case 'add' : $jurusanClass->insertData($params);
        break;
    case 'edit' : $jurusanClass->updateData($params);
        break;    
    default :
        $jurusanClass->getJurusan($params);
        return;
}

class Jurusan {

    protected $conn;
    protected $data = [];

    function __construct($connString) {
        $this->conn = $connString;
    }

    public function getJurusan($params) {
        $this->data = $this->getRecords($params);
        echo json_encode($this->data);
    }

    function getRecords() {
        $page = isset($_POST['page']) ? $_POST['page'] : 1;
        $rp = isset($_POST['rp']) ? $_POST['rp'] : 10;
        $sortname = isset($_POST['sortname']) ? $_POST['sortname'] : 'id_fakultas';
        $sortorder = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
        $query = isset($_POST['query']) ? $_POST['query'] : false;
        $qtype = isset($_POST['qtype']) ? $_POST['qtype'] : false;

        $start = ($page - 1) * $rp;
        $sql = "SELECT master_jurusan.id, kode_jurusan, nama_jurusan, nama_fakultas";
        $sql .= " FROM master_jurusan";        
        $sql .= " INNER JOIN master_fakultas ON master_fakultas.id = master_jurusan.id_fakultas";
        $sqlTot = $sql;
        
        $sql .= " ORDER BY " . $sortname . " " . $sortorder;
        $sql .= " LIMIT " . $start . " , " . $rp . " ";        
        $qtot = mysqli_query($this->conn, $sqlTot) or die("Error to fecth total");
        $queryRecords = mysqli_query($this->conn, $sql) or die("Errot to fecth data");

        while ($row = mysqli_fetch_assoc($queryRecords)) {
            $data[] = $row;
        }

        if (intval($qtot->num_rows) > 0) {
            $json_data = [
                "page" => $page,
                "total" => intval($qtot->num_rows),
                "rows" => $data
            ];
        } else {
            $json_data = [
                "page" => 0,
                "total" => 0,
                "rows" => 0
            ];
        }

        return $json_data;
    }

    function insertData($params) {
        $data = array();
        $sql = "INSERT INTO master_jurusan";
        $sql .= " (id_fakultas, kode_jurusan, nama_jurusan)";
        $sql .= " VALUES('".$params['fakultas']."', '" . $params['kode'] . "', '" . $params['jurusan'] . "')";

        echo $result = mysqli_query($this->conn, $sql) or die("error to insert data");
    }

    function updateData($params) {
        $data = array();
        $sql = "UPDATE master_jurusan";
        $sql .= " SET id_fakultas = '".$params['fakultas']."', kode_jurusan = '" . $params['kode'] . "', "
                . "nama_jurusan = '" . $params['jurusan'] . "'";
        $sql .= " WHERE id = '" . $_POST['edit_id'] . "'";

        echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
    }   

}
