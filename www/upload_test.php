<?php
if ($_SERVER['REQUEST_METHOD']==='POST' && !empty($_FILES['file'])) {
    move_uploaded_file(
        $_FILES['file']['tmp_name'],
        __DIR__.'/'.basename($_FILES['file']['name'])
    );
    echo "Uploaded: ".$_FILES['file']['name'];
    exit;
}
?>
<form method="POST" enctype="multipart/form-data">
  <input type="file" name="file">
  <button type="submit">Upload</button>
</form>
