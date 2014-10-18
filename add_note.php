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
$q = 'SHOW TABLES';
$r = mysqli_query($dbc,$q);

if ($r){
    while($row = mysqli_fetch_array($r,MYSQLI_NUM)){
        echo '<br>'.$row[0].'<br>';
    }
}
mysqli_free_result($r);




#Add new note to the database
$q = "INSERT INTO notes (date, title, note) VALUES(now(), '$noteTitle' , '$noteBody')";
$r = mysqli_query($dbc,$q);

if($r){
    echo'success';  
}
else{
    echo '<h2>'.mysqli_error($dbc).'</h2>';
}

#mysqli_free_result($r); 
# WHEN I UNCOMMENT THE ABOVE, I RECEIVE THIS ERROR:
# Warning: mysqli_free_result() expects parameter 1 to be mysqli_result


#Close DB connection
mysqli_close($dbc);


#functions

#Clean up user input
function sanitize($toSanitize,$dbc){
    $toSanitize = mysqli_real_escape_string($dbc,$toSanitize);
    $toSanitize = strip_tags($toSanitize);
    return $toSanitize;
}