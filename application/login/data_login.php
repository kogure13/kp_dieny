<?php

date_default_timezone_set('Etc/UTC');
require '../../PHPMailer/PHPMailerAutoload.php';
require '../../inc/class.php';
$db = new Database();

$connString = $db->getConstring();
$userClass = new User($connString);

$params = $_REQUEST;
$action = isset($params['action']) != '' ? $params['action'] : '';

switch ($action) {
    case 'registrasi' : $userClass->regUser($params);
        break;
    case 'login' : echo $action;        
        break;
}

class User {

    protected $conn;

    function __construct($connString) {
        $this->conn = $connString;
    }

    function regUser($params) {
        //setting email
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "agung.ais.mu@gmail.com";
        $mail->Password = "qazplm990";

        $record = "SELECT * FROM mhs_login";
        $record .= " WHERE username = '" . $params['nim'] . "' AND email = '".$params['email']."'";
        $qTot = mysqli_query($this->conn, $record) or die("data already exist");

        if ($qTot < 1) {
            $kode = md5(uniqid(rand()));
            $key = "2017aBcDEF12345";
            $password = addslashes($params['password']);
            $hash = md5($key . md5($password) . $key);

            $sql = "INSERT INTO mhs_login";
            $sql .= " (username, password, email, aktif, kode)";
            $sql .= " VALUES('" . addslashes($params['nim']) . "', '" . $hash . "', "
                    . "'" . addslashes($params['email']) . "', 'T', '" . $kode . "')";

            echo $result = mysqli_query($this->conn, $sql) or die("error to insert kategori data");

            $mail->setFrom('agung.ais.mu@gmail.com', 'Aktivasi Kode ');
            $mail->addReplyTo('agung.ais.mu@gmail.com', 'UNNUR');
            $mail->addAddress($params['email']);
            $mail->Subject = "Kode Aktivasi";
            $mail->msgHTML($kode);
            $mail->AltBody = 'This is a plain-text message body';

            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
                return FALSE;
            } else {
                echo "Message sent!";
                return TRUE;
            }
        }else{
            echo 'Data Sudah Terdaftar';
        }
    }

    function loginUser($params) {
        $data = array();
    }

}
