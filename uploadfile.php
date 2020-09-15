<?php
include 'dbConfig.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $img = $_FILES['image']['name'];
  
  $insert = "INSERT into images VALUES ('NULL', '$name', '$img')";
  if (mysqli_query($conn, $insert)) {
    $location = move_uploaded_file($_FILES['image']['tmp_name'], "picture/$img");
    echo "<p>Your file has been uploaded</p>";
  } else {
    echo "<p>Image was not uploaded to the folder</p>";
  }

}
?>
<!DOCTYPE html>
<html>
<body>

<form action="uploadfile.php" method="post" enctype="multipart/form-data">
  <labe>Name of the file</label>
  <input type="text" name="name">
  </br>
  </br>
  <label>Select image to upload</label>
  <input type="file" name="image" id="fileToUpload">
  <input type="submit" name="submit" value = "Upload File">
</form>



</body>
</html>