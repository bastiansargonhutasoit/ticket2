<?php
date_default_timezone_set('Asia/Jakarta');
$server = "localhost"; //
$usernames = "root";  //
$passwords = ""; //
$database = "ticket";

$koneksi = new mysqli($server, $usernames, $passwords, $database);
if ($koneksi->connect_error) {
    die("Koneksi Error: " . $koneksi->connect_error);
}
