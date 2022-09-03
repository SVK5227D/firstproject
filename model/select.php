<?php

    //Required file from common folder
    require_once('../common/database.php');

    //Selecting values from table
    $sql = "SELECT * FROM details";

    
    $result = $conn->query($sql);

?>