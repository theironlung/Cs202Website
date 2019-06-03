<?php

$con = mysqli_connect('localhost', 'aidaaefj_koenig', 'shadowninja');

mysqli_select_db($con, 'aidaaefj_portfolioContact');

if(!$con){
    die("Connection Error: ".mysqli_connect_error());
}

?>