<!DOCTYPE html>
<html>
<head>
  <title>Uploading a File</title>
</head>
<body>
   <h2>Upload Form</h2>
 
  <form action="upload.php" method="post" enctype="multipart/form-data">
  
  <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
  
  <label for="the_file">Upload a file:</label>
  
  <input type="file" name="the_file" id="the_file"/>
  
  <input type="submit" value="Upload File"/>
  
  </form>

<?php

  if ($_FILES['the_file']['error'] > 0)
  {
    echo 'Problem: ';
    switch ($_FILES['the_file']['error'])
    {
      case 1:
         echo 'File exceeded upload_max_filesize.';
         break;
      case 2:
         echo 'File exceeded max_file_size.';
         break;
      case 3:
         echo 'File only partially uploaded.';
         break;
      case 4:
         echo 'No file uploaded.';
         break;
      case 6:
         echo 'Cannot upload file: No temp directory specified.';
         break;
      case 7:
         echo 'Upload failed: Cannot write to disk.';
         break;
      case 8:
         echo 'A PHP extension blocked the file upload.';
         break;
    }
    exit;
  }

  // Does the file have the right MIME type?
  if ($_FILES['the_file']['type'] != 'image/png')
  {
    echo 'Problem: file is not a PNG image.';
    exit;
  }

  // put the file where we'd like it
  $uploaded_file = '/lab-assignments-emnojacks/M03/uploads/'.$_FILES['the_file']['name'];

  if (is_uploaded_file($_FILES['the_file']['tmp_name']))
  {
     if (!move_uploaded_file($_FILES['the_file']['tmp_name'], $uploaded_file))
     {
        echo 'Problem: Could not move file to destination directory.';
        exit;
     }
  }
  else
  {
    echo 'Problem: Possible file upload attack. Filename: ';
    echo $_FILES['the_file']['name'];
    exit;
  }

  echo 'File uploaded successfully.';

  // show what was uploaded
  echo '<p>You uploaded the following image:<br/>';
  echo '<img src="/lab-assignments-emnojacks/M03/uploads/'.$_FILES['the_file']['name'].'"/>';
?>
</body>
</html>