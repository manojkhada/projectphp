<?php
$severname="localhost";
$user="root";
$password="";
try new PDO($severname, $user, $password){

} catch(PDOException $e) {
    echo $e->getMessage();
    echo "please enter an correct data";
?>