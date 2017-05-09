<?php
  function data_table($database, $dbtable, $id){
    $query = "SELECT * FROM $dbtable WHERE id = $id"; //Select all data(*) from database name 'pages' where 'id' variable of thet database is equal to id of the page putted by user
    $result = mysqli_query($database, $query); //Var 'result' equals to msqli query from database connection 'dbc' and query 'query'
    $data_table = mysqli_fetch_assoc($result); //Get data from msqli var 'result' to associated array 'page'
    return $data_table; //return data gathered
  }
 ?>
