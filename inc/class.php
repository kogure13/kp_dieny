<?php

class Database {

    var $DB_Host = "192.168.0.128";
    var $DB_Name = "kp_dieny";
    var $DB_User = "root";
    var $DB_Pass = "!AIS_admin007";
    var $conn;

    function getConstring() {
        $con = mysqli_connect($this->DB_Host, $this->DB_User, $this->DB_Pass, $this->DB_Name) or 
                die("Connection failed: " . mysqli_connect_error());

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->conn = $con;
        }

        return $this->conn;
    }

}

class Main {
    function getPage() {
        if (!isset($_GET['page'])) {
            include_once 'view/dashboard.php';
        } else {
            $page = htmlentities($_GET['page']);
            $pageRoot = "view/" . $page . ".php";

            if (file_exists($pageRoot)) {
                include_once $pageRoot;            
            } elseif ($page == "login") {
                include_once 'model/login.php';
            } elseif ($page == "logout") {
                $user = new User();
                $user->logout();
            } else {
                include_once 'view/dashboard.php';
            }
        }
    }
            
    function getMain() {
        include 'model/main.php';
        return;
    }
    
    function getHeader() {
        include 'model/header.php';
        return;
    }
    
    function getMenu() {
        include 'model/mainMenu.php';
        return;
    }        
}

class User {
    
    function logout() {
        session_destroy();
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
    }
}