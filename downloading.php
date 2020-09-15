<?php
include 'dbConfig.php';
$picname = $_POST['picture'];

$query = "SELECT * FROM images WHERE name = '$picname'";

if ($result = mysqli_query($conn, $query)) {
    $fileName = mysqli_fetch_row($result)[2];
    mysqli_free_result($result);
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fileName).'"' );
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize("picture/$fileName"));
    ob_clean();
    flush();
    readfile("picture/$fileName");
    exit();
    
    
}
else {
    echo "nah b";
}

?>