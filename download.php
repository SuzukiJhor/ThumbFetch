<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imurl = $_POST['imurl'];
    echo "imurl URL: " . $imurl;
}
