<?php 

    require_once '../load.php';

    //get all Roku users
    if(isset($_GET['allusers'])){
        $users = getAllUsers();
        // send this back to js
        echo $users;
    }