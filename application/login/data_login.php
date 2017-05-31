<?php

include '../../inc/class.php';
$db = new Database();
$connString = $db->getConstring();

$params = $_REQUEST;
$action = isset($params['action']) != '' ? $params['action'] : '';

$userClass = new User($connString);

switch ($action) {
    case 'regsitrasi':  $userClass->getDaftar($params);
        break;
}
