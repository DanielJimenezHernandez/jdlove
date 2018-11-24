<?php
    include("session.php");
    $currentDir = getcwd();

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    $fileName = $_FILES['photo']['name'];
    $fileSize = $_FILES['photo']['size'];
    $fileTmpName  = $_FILES['photo']['tmp_name'];
    $fileType = $_FILES['photo']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $photoNameStripped = str_replace(' ', '_', $_POST['photoName']);
    $finalName = $_SESSION['login_userName'] . '_' . $photoNameStripped . '.' . $fileExtension;
 
    if ($_POST['path'] == 'img/pics/'){
        $uploadDirectory = "/../img/pics/";
        $uploadPath = $currentDir . $uploadDirectory . $finalName;
    
        $sql = "INSERT INTO Pictures (picture_id, path, user_id, foto_name, caption, full_path) VALUES (NULL, '".$_POST['path'].$finalName."', ".$_SESSION['login_userId'].", '".$_POST[photoName]."', '".$_POST[caption]."','".$uploadPath."')";
        printf("SQL:%s<br>",$sql);
        $returnTo = '../memories.php';
    }



    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                if ($db->query($sql) === TRUE) {
                    header("Location: ".$returnTo."");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "<br>";
            }
        }
    }


?>