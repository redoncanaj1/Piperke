<?php
// need to create database "piperke" to let users web. 
$conn = new mysqli("localhost", "root", "", "piperke");

if (!$conn) die ("Couldn't connect to the database");
?>