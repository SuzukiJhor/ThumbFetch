<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imurl = $_POST['imurl'];
    $ch = curl_init($imurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $download = curl_exec($ch);
  
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment; filename="thumbnail.jpg');

    echo $download;
}
