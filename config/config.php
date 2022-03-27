<?php

const BASEDIR = 'C:\\wamp64\\www\\todolistapp\\';
const URL = 'http://127.0.0.1/todolistapp/';
const DEV_MODE = true;

try {
    $db = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
}catch(PDOException $e) {
    echo $e->getMessage();
}