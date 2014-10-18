<?php
#Get DB connection script
require('../../../connect_db.php');

#Display DB connection info
if(mysqli_ping($dbc)){
    echo 'MySQL Server'.mysqli_get_server_info($dbc).'on'.mysqli_get_host_info($dbc);
}

#Check if user entered required information
if(!empty($_POST['addtitle'])){
    $noteTitle = $_POST['addtitle'];
}
else{  
    $noteTitle = "no info entered";
}

if(!empty($_POST['addnote'])){
    $noteBody = $_POST['addnote'];
}
else{
    $noteBody = 'no info entered!';
}

echo '<h1>'.$noteTitle.'</h1>';
echo '<p>'.$noteBody.'</p>';