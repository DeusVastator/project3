<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Notebook</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

<section class="notebook">
         <h1>Notebook</h1>









<?php

$servername = getenv('myfirstproject-deusvastator.c9users.io');
$username= 'deusvastator';
$password = "";
$database = "c9";
$dbport = 3306;
$dbname = "project3";


$db = new mysqli($servername, $username, $password, $database, $dbport);


if ($db->connect_error) {
    die("Connection Failed: " . $db->connection_error);
}

echo ("connected Successfully: " . $db->host_info);

mysqli_select_db($db, $dbname);

if (empty($result)) {
$sql = "CREATE TABLE NoteBook(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(24) NOT NULL,
body VARCHAR(600) NOT NULL
)";
}
if ($db->query($sql) === TRUE) {
    print_r("<br>Table NoteBook was created successfully.");
} else {
    print_r("<br>There was an error creating the table: " . $db->error);
}


$notebook_insert = "INSERT INTO NoteBook (title, body) VALUES ('$title', '$body')";

if (mysqli_query($db, $notebook_insert)) {
   echo "<br>Notes added successfully.";
} else {
    echo "<br>Error: " . mysqli_error($db);
}

print_r("<h1>Previous Notes</h1>");

$sql = "SELECT id, title, body FROM NoteBook";
$notebookresult = $db->query($sql);

if ($notebookresult->num_rows > 0) {
   
    while ($row = $notebookresult->fetch_assoc()) {
    echo "Notes ID: " . $row["id"] . "<br>Previous Notes " . 
    $row["title"] . " " . $row["body"] . "<br><br>";
}
} else { 
    print_r("<br>No results to display.");
}



$db->close();






?>
   
   <a href="../index.html">Back to Form</a>
        </section>
      <script src="../js/main.js"></script>
    </body>
</html>