<?php
    include 'db.php'; //include database connection
    include 'var.php'; //include variables used in other pages
    include ('functions/data.php'); //data get from mysql function

        if(isset($_GET['page'])){ // if GET is set then var 'pageid' equal to GET if not set then 'pageid' = 0
          $pageid = $_GET['page'];
        }  else{
          $pageid = 1; //page equal to one or homepage
        }
        $page = data_table($dbc, 'pages', $pageid);

    include ('/templates/header.php'); //include header of the page
        echo $page['body'];
    include ('/templates/footer.php'); //include footer of the page

?>
