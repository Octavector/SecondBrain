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
    $noteTitle = sanitize($noteTitle,$dbc);
}
else{  
    $noteTitle = "no info entered";
}

if(!empty($_POST['addnote'])){
    $noteBody = $_POST['addnote'];
    $noteBody = sanitize($noteBody,$dbc);
}
else{
    $noteBody = 'no info entered!';
}

echo '<h1>'.$noteTitle.'</h1>';
echo '<p>'.$noteBody.'</p>';


#loop through tables
$q = 'show tables';
$r = mysqli_query($dbc,$q);

if ($r){
    while($row = mysqli_fetch_array($r,MYSQLI_NUM)){
        echo '<br>'.$row[0];
    }
}
mysqli_free_result($r);
mysqli_close($dbc);


#functions

#Clean up user input
function sanitize($toSanitize,$dbc){
    $toSanitize = mysqli_real_escape_string($dbc,$toSanitize);
    $toSanitize = strip_tags($toSanitize);
    return $toSanitize;
}